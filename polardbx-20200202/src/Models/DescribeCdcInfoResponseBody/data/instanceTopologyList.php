<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data\instanceTopologyList\physicalNodes;

class instanceTopologyList extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $hashLevel;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var physicalNodes[]
     */
    public $physicalNodes;

    /**
     * @var int
     */
    public $streamNum;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'comment' => 'Comment',
        'groupName' => 'GroupName',
        'hashLevel' => 'HashLevel',
        'instanceName' => 'InstanceName',
        'physicalNodes' => 'PhysicalNodes',
        'streamNum' => 'StreamNum',
    ];

    public function validate()
    {
        if (\is_array($this->physicalNodes)) {
            Model::validateArray($this->physicalNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->hashLevel) {
            $res['HashLevel'] = $this->hashLevel;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->physicalNodes) {
            if (\is_array($this->physicalNodes)) {
                $res['PhysicalNodes'] = [];
                $n1 = 0;
                foreach ($this->physicalNodes as $item1) {
                    $res['PhysicalNodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->streamNum) {
            $res['StreamNum'] = $this->streamNum;
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
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['HashLevel'])) {
            $model->hashLevel = $map['HashLevel'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['PhysicalNodes'])) {
            if (!empty($map['PhysicalNodes'])) {
                $model->physicalNodes = [];
                $n1 = 0;
                foreach ($map['PhysicalNodes'] as $item1) {
                    $model->physicalNodes[$n1] = physicalNodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['StreamNum'])) {
            $model->streamNum = $map['StreamNum'];
        }

        return $model;
    }
}
