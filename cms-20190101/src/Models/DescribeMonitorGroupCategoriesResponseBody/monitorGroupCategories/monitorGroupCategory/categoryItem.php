<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories\monitorGroupCategory;

use AlibabaCloud\Tea\Model;

class categoryItem extends Model
{
    /**
     * @description The abbreviation of the Alibaba Cloud service name.
     *
     * To obtain the abbreviation of an Alibaba Cloud service name, call the [DescribeProjectMeta](~~114916~~) operation. The `metricCategory` tag in the `Labels` response parameter indicates the abbreviation of the Alibaba Cloud service name.
     * @example ECS
     *
     * @var string
     */
    public $category;

    /**
     * @description The number of resources that belong to the cloud service.
     *
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'category' => 'Category',
        'count'    => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
