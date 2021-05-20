<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetInstanceConsumeTimeRankResponseBody\instanceConsumeTimeRank;

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
    public $bizdate;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $prgType;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var int
     */
    public $consumed;
    protected $_name = [
        'owner'      => 'Owner',
        'nodeName'   => 'NodeName',
        'bizdate'    => 'Bizdate',
        'instanceId' => 'InstanceId',
        'prgType'    => 'PrgType',
        'nodeId'     => 'NodeId',
        'consumed'   => 'Consumed',
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
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->prgType) {
            $res['PrgType'] = $this->prgType;
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
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PrgType'])) {
            $model->prgType = $map['PrgType'];
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
