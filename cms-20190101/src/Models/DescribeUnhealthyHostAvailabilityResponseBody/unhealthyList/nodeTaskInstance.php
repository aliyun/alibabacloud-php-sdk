<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeUnhealthyHostAvailabilityResponseBody\unhealthyList\nodeTaskInstance\instanceList;

class nodeTaskInstance extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var instanceList
     */
    public $instanceList;
    protected $_name = [
        'id' => 'Id',
        'instanceList' => 'InstanceList',
    ];

    public function validate()
    {
        if (null !== $this->instanceList) {
            $this->instanceList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->instanceList) {
            $res['InstanceList'] = null !== $this->instanceList ? $this->instanceList->toArray($noStream) : $this->instanceList;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['InstanceList'])) {
            $model->instanceList = instanceList::fromMap($map['InstanceList']);
        }

        return $model;
    }
}
