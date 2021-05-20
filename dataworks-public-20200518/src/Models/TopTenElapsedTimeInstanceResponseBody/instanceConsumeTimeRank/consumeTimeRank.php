<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponseBody\instanceConsumeTimeRank;

use AlibabaCloud\Tea\Model;

class consumeTimeRank extends Model
{
    /**
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $businessDate;

    /**
     * @var int
     */
    public $programType;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $consumed;
    protected $_name = [
        'owner'        => 'Owner',
        'nodeName'     => 'NodeName',
        'businessDate' => 'BusinessDate',
        'programType'  => 'ProgramType',
        'instanceId'   => 'InstanceId',
        'nodeId'       => 'NodeId',
        'consumed'     => 'Consumed',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->businessDate) {
            $res['BusinessDate'] = $this->businessDate;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->consumed) {
            $res['Consumed'] = $this->consumed;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return consumeTimeRank
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['BusinessDate'])) {
            $model->businessDate = $map['BusinessDate'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Consumed'])) {
            $model->consumed = $map['Consumed'];
        }

        return $model;
    }
}
