<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data\runs;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data\topics;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $bizdate;

    /**
     * @var int
     */
    public $inGroupId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var int
     */
    public $nodeId;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var int
     */
    public $prgType;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var runs[]
     */
    public $runs;

    /**
     * @var topics[]
     */
    public $topics;
    protected $_name = [
        'bizdate'    => 'Bizdate',
        'inGroupId'  => 'InGroupId',
        'instanceId' => 'InstanceId',
        'nodeId'     => 'NodeId',
        'nodeName'   => 'NodeName',
        'owner'      => 'Owner',
        'prgType'    => 'PrgType',
        'projectId'  => 'ProjectId',
        'runs'       => 'Runs',
        'topics'     => 'Topics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizdate) {
            $res['Bizdate'] = $this->bizdate;
        }
        if (null !== $this->inGroupId) {
            $res['InGroupId'] = $this->inGroupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->prgType) {
            $res['PrgType'] = $this->prgType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->runs) {
            $res['Runs'] = [];
            if (null !== $this->runs && \is_array($this->runs)) {
                $n = 0;
                foreach ($this->runs as $item) {
                    $res['Runs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->topics) {
            $res['Topics'] = [];
            if (null !== $this->topics && \is_array($this->topics)) {
                $n = 0;
                foreach ($this->topics as $item) {
                    $res['Topics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bizdate'])) {
            $model->bizdate = $map['Bizdate'];
        }
        if (isset($map['InGroupId'])) {
            $model->inGroupId = $map['InGroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PrgType'])) {
            $model->prgType = $map['PrgType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Runs'])) {
            if (!empty($map['Runs'])) {
                $model->runs = [];
                $n           = 0;
                foreach ($map['Runs'] as $item) {
                    $model->runs[$n++] = null !== $item ? runs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n             = 0;
                foreach ($map['Topics'] as $item) {
                    $model->topics[$n++] = null !== $item ? topics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
