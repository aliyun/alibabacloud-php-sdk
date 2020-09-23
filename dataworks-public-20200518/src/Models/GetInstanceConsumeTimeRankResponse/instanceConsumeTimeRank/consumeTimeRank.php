<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponse\instanceConsumeTimeRank;

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
    public $bizdate;

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
    public $prgType;
    protected $_name = [
        'nodeName'   => 'NodeName',
        'nodeId'     => 'NodeId',
        'bizdate'    => 'Bizdate',
        'owner'      => 'Owner',
        'consumed'   => 'Consumed',
        'instanceId' => 'InstanceId',
        'prgType'    => 'PrgType',
    ];

    public function validate()
    {
        Model::validateRequired('nodeName', $this->nodeName, true);
        Model::validateRequired('nodeId', $this->nodeId, true);
        Model::validateRequired('bizdate', $this->bizdate, true);
        Model::validateRequired('owner', $this->owner, true);
        Model::validateRequired('consumed', $this->consumed, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('prgType', $this->prgType, true);
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
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
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
        if (null !== $this->prgType) {
            $res['PrgType'] = $this->prgType;
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
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
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
        if (isset($map['PrgType'])) {
            $model->prgType = $map['PrgType'];
        }

        return $model;
    }
}
