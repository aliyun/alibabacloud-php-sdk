<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList\nodeTaskInstance\instanceList;
use AlibabaCloud\Tea\Model;

class nodeTaskInstance extends Model
{
    /**
     * @var instanceList
     */
    public $instanceList;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'instanceList' => 'InstanceList',
        'id'           => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
