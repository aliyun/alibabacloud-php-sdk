<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories\monitorGroupCategory;
use AlibabaCloud\Tea\Model;

class monitorGroupCategories extends Model
{
    /**
     * @description The ID of the application group.
     *
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @description One of the cloud services to which the resources in the application group belong and the number of resources that belong to the cloud service.
     *
     * @var monitorGroupCategory
     */
    public $monitorGroupCategory;
    protected $_name = [
        'groupId'              => 'GroupId',
        'monitorGroupCategory' => 'MonitorGroupCategory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->monitorGroupCategory) {
            $res['MonitorGroupCategory'] = null !== $this->monitorGroupCategory ? $this->monitorGroupCategory->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorGroupCategories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MonitorGroupCategory'])) {
            $model->monitorGroupCategory = monitorGroupCategory::fromMap($map['MonitorGroupCategory']);
        }

        return $model;
    }
}
