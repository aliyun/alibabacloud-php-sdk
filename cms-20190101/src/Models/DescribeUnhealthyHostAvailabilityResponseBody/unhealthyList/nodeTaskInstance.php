<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList\nodeTaskInstance\instanceList;
use AlibabaCloud\Tea\Model;

class nodeTaskInstance extends Model
{
    /**
     * @description The ID of the availability monitoring task.
     *
     * @example 123456
     *
     * @var int
     */
    public $id;

    /**
     * @description The unhealthy instances that are detected by the availability monitoring task.
     *
     * @var instanceList
     */
    public $instanceList;
    protected $_name = [
        'id'           => 'Id',
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeTaskInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }

        return $model;
    }
}
