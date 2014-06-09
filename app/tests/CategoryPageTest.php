<?php

use HireMe\Entities\Category;

class CategoryPageTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function test_category_page_is_ok()
	{
        $category = Category::first();

        $route = route('category', [$category->slug, $category->id]);
		$crawler = $this->client->request('GET', $route);

		$this->assertTrue($this->client->getResponse()->isOk());
	}

    public function test_category_name_is_displayed()
    {
        $category = Category::first();

        $route = route('category', [$category->slug, $category->id]);
        $crawler = $this->client->request('GET', $route);

        $this->assertCount(1, $crawler->filter('h1:contains("' . $category->name . '")'));
    }

}
