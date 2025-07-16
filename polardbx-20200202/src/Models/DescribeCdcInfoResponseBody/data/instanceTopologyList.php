<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeCdcInfoResponseBody\data\instanceTopologyList\physicalNodes;
use AlibabaCloud\Tea\Model;

class instanceTopologyList extends Model
{
    /**
     * @example BINLOG_X
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example ***
     *
     * @var string
     */
    public $comment;

    /**
     * @example test
     *
     * @var string
     */
    public $groupName;

    /**
     * @example RECORD
     *
     * @var string
     */
    public $hashLevel;

    /**
     * @example pxc-***
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var physicalNodes[]
     */
    public $physicalNodes;

    /**
     * @example 2
     *
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

    public function validate() {}

    public function toMap()
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
            $res['PhysicalNodes'] = [];
            if (null !== $this->physicalNodes && \is_array($this->physicalNodes)) {
                $n = 0;
                foreach ($this->physicalNodes as $item) {
                    $res['PhysicalNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->streamNum) {
            $res['StreamNum'] = $this->streamNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceTopologyList
     */
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
                $n = 0;
                foreach ($map['PhysicalNodes'] as $item) {
                    $model->physicalNodes[$n++] = null !== $item ? physicalNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StreamNum'])) {
            $model->streamNum = $map['StreamNum'];
        }

        return $model;
    }
}
