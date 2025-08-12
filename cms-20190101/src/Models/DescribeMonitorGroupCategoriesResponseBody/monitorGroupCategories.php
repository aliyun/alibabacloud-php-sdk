<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorGroupCategoriesResponseBody\monitorGroupCategories\monitorGroupCategory;

class monitorGroupCategories extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var monitorGroupCategory
     */
    public $monitorGroupCategory;
    protected $_name = [
        'groupId' => 'GroupId',
        'monitorGroupCategory' => 'MonitorGroupCategory',
    ];

    public function validate()
    {
        if (null !== $this->monitorGroupCategory) {
            $this->monitorGroupCategory->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->monitorGroupCategory) {
            $res['MonitorGroupCategory'] = null !== $this->monitorGroupCategory ? $this->monitorGroupCategory->toArray($noStream) : $this->monitorGroupCategory;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
