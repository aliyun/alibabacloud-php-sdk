<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstanceSwitchLogResponseBody;

use AlibabaCloud\Dara\Model;

class logItems extends Model
{
    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $switchCode;

    /**
     * @var string
     */
    public $switchStatus;

    /**
     * @var string
     */
    public $switchTime;
    protected $_name = [
        'nodeId' => 'NodeId',
        'switchCode' => 'SwitchCode',
        'switchStatus' => 'SwitchStatus',
        'switchTime' => 'SwitchTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->switchCode) {
            $res['SwitchCode'] = $this->switchCode;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }

        if (null !== $this->switchTime) {
            $res['SwitchTime'] = $this->switchTime;
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
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['SwitchCode'])) {
            $model->switchCode = $map['SwitchCode'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        if (isset($map['SwitchTime'])) {
            $model->switchTime = $map['SwitchTime'];
        }

        return $model;
    }
}
