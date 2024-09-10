<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories\monitorGroupCategory;

use AlibabaCloud\Tea\Model;

class categoryItem extends Model
{
    /**
     * @description The abbreviation of the cloud service name.
     *
     * >  For more information about how to obtain the abbreviation of a cloud service name, see `metricCategory` in the response parameter `Labels` of the [DescribeProjectMeta](https://help.aliyun.com/document_detail/114916.html) operation.
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
