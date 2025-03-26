<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\ListVirtualPhysicalConnectionsRequest\tags;

class ListVirtualPhysicalConnectionsRequest extends Model
{
    /**
     * @var bool
     */
    public $isConfirmed;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $physicalConnectionId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string[]
     */
    public $virtualPhysicalConnectionAliUids;

    /**
     * @var string
     */
    public $virtualPhysicalConnectionBusinessStatus;

    /**
     * @var string[]
     */
    public $virtualPhysicalConnectionIds;

    /**
     * @var string[]
     */
    public $virtualPhysicalConnectionStatuses;

    /**
     * @var string[]
     */
    public $vlanIds;
    protected $_name = [
        'isConfirmed' => 'IsConfirmed',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'physicalConnectionId' => 'PhysicalConnectionId',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
        'virtualPhysicalConnectionAliUids' => 'VirtualPhysicalConnectionAliUids',
        'virtualPhysicalConnectionBusinessStatus' => 'VirtualPhysicalConnectionBusinessStatus',
        'virtualPhysicalConnectionIds' => 'VirtualPhysicalConnectionIds',
        'virtualPhysicalConnectionStatuses' => 'VirtualPhysicalConnectionStatuses',
        'vlanIds' => 'VlanIds',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->virtualPhysicalConnectionAliUids)) {
            Model::validateArray($this->virtualPhysicalConnectionAliUids);
        }
        if (\is_array($this->virtualPhysicalConnectionIds)) {
            Model::validateArray($this->virtualPhysicalConnectionIds);
        }
        if (\is_array($this->virtualPhysicalConnectionStatuses)) {
            Model::validateArray($this->virtualPhysicalConnectionStatuses);
        }
        if (\is_array($this->vlanIds)) {
            Model::validateArray($this->vlanIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->isConfirmed) {
            $res['IsConfirmed'] = $this->isConfirmed;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->physicalConnectionId) {
            $res['PhysicalConnectionId'] = $this->physicalConnectionId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->virtualPhysicalConnectionAliUids) {
            if (\is_array($this->virtualPhysicalConnectionAliUids)) {
                $res['VirtualPhysicalConnectionAliUids'] = [];
                $n1 = 0;
                foreach ($this->virtualPhysicalConnectionAliUids as $item1) {
                    $res['VirtualPhysicalConnectionAliUids'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->virtualPhysicalConnectionBusinessStatus) {
            $res['VirtualPhysicalConnectionBusinessStatus'] = $this->virtualPhysicalConnectionBusinessStatus;
        }

        if (null !== $this->virtualPhysicalConnectionIds) {
            if (\is_array($this->virtualPhysicalConnectionIds)) {
                $res['VirtualPhysicalConnectionIds'] = [];
                $n1 = 0;
                foreach ($this->virtualPhysicalConnectionIds as $item1) {
                    $res['VirtualPhysicalConnectionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->virtualPhysicalConnectionStatuses) {
            if (\is_array($this->virtualPhysicalConnectionStatuses)) {
                $res['VirtualPhysicalConnectionStatuses'] = [];
                $n1 = 0;
                foreach ($this->virtualPhysicalConnectionStatuses as $item1) {
                    $res['VirtualPhysicalConnectionStatuses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->vlanIds) {
            if (\is_array($this->vlanIds)) {
                $res['VlanIds'] = [];
                $n1 = 0;
                foreach ($this->vlanIds as $item1) {
                    $res['VlanIds'][$n1++] = $item1;
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
        if (isset($map['IsConfirmed'])) {
            $model->isConfirmed = $map['IsConfirmed'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PhysicalConnectionId'])) {
            $model->physicalConnectionId = $map['PhysicalConnectionId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VirtualPhysicalConnectionAliUids'])) {
            if (!empty($map['VirtualPhysicalConnectionAliUids'])) {
                $model->virtualPhysicalConnectionAliUids = [];
                $n1 = 0;
                foreach ($map['VirtualPhysicalConnectionAliUids'] as $item1) {
                    $model->virtualPhysicalConnectionAliUids[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VirtualPhysicalConnectionBusinessStatus'])) {
            $model->virtualPhysicalConnectionBusinessStatus = $map['VirtualPhysicalConnectionBusinessStatus'];
        }

        if (isset($map['VirtualPhysicalConnectionIds'])) {
            if (!empty($map['VirtualPhysicalConnectionIds'])) {
                $model->virtualPhysicalConnectionIds = [];
                $n1 = 0;
                foreach ($map['VirtualPhysicalConnectionIds'] as $item1) {
                    $model->virtualPhysicalConnectionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VirtualPhysicalConnectionStatuses'])) {
            if (!empty($map['VirtualPhysicalConnectionStatuses'])) {
                $model->virtualPhysicalConnectionStatuses = [];
                $n1 = 0;
                foreach ($map['VirtualPhysicalConnectionStatuses'] as $item1) {
                    $model->virtualPhysicalConnectionStatuses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['VlanIds'])) {
            if (!empty($map['VlanIds'])) {
                $model->vlanIds = [];
                $n1 = 0;
                foreach ($map['VlanIds'] as $item1) {
                    $model->vlanIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
