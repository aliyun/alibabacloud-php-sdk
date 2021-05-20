<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TopTenElapsedTimeInstanceResponse\instanceConsumeTimeRank;

use AlibabaCloud\Tea\Model;

class consumeTimeRank extends Model
{
    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $businessDate;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $consumed;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $programType;
    protected $_name = [
        'nodeName'     => 'NodeName',
        'nodeId'       => 'NodeId',
        'businessDate' => 'BusinessDate',
        'owner'        => 'Owner',
        'consumed'     => 'Consumed',
        'instanceId'   => 'InstanceId',
        'programType'  => 'ProgramType',
    ];

    public function validate()
    {
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('businessDate', $this->businessDate, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('consumed', $this->consumed, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('programType', $this->programType, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->businessDate) {
            $res['BusinessDate'] = $this->businessDate;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->consumed) {
            $res['Consumed'] = $this->consumed;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->programType) {
            $res['ProgramType'] = $this->programType;
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
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['BusinessDate'])) {
            $model->businessDate = $map['BusinessDate'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['Consumed'])) {
            $model->consumed = $map['Consumed'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProgramType'])) {
            $model->programType = $map['ProgramType'];
        }

        return $model;
    }
}
