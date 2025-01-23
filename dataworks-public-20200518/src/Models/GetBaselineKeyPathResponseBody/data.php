<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data\runs;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetBaselineKeyPathResponseBody\data\topics;

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
        if (\is_array($this->runs)) {
            Model::validateArray($this->runs);
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->runs)) {
                $res['Runs'] = [];
                $n1          = 0;
                foreach ($this->runs as $item1) {
                    $res['Runs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1            = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
                $n1          = 0;
                foreach ($map['Runs'] as $item1) {
                    $model->runs[$n1++] = runs::fromMap($item1);
                }
            }
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n1            = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1++] = topics::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
