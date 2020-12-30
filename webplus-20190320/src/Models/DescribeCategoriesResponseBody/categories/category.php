<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeCategoriesResponseBody\categories;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeCategoriesResponseBody\categories\category\demoProjects;
use AlibabaCloud\Tea\Model;

class category extends Model
{
    /**
     * @var string
     */
    public $categoryLogo;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var demoProjects
     */
    public $demoProjects;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $categoryDescription;
    protected $_name = [
        'categoryLogo'        => 'CategoryLogo',
        'updateTime'          => 'UpdateTime',
        'demoProjects'        => 'DemoProjects',
        'createTime'          => 'CreateTime',
        'categoryId'          => 'CategoryId',
        'categoryName'        => 'CategoryName',
        'categoryDescription' => 'CategoryDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryLogo) {
            $res['CategoryLogo'] = $this->categoryLogo;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->demoProjects) {
            $res['DemoProjects'] = null !== $this->demoProjects ? $this->demoProjects->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->categoryDescription) {
            $res['CategoryDescription'] = $this->categoryDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return category
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryLogo'])) {
            $model->categoryLogo = $map['CategoryLogo'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['DemoProjects'])) {
            $model->demoProjects = demoProjects::fromMap($map['DemoProjects']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['CategoryDescription'])) {
            $model->categoryDescription = $map['CategoryDescription'];
        }

        return $model;
    }
}
