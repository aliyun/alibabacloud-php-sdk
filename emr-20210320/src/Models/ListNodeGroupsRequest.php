<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListNodeGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string[]
     */
    public $nodeGroupIds;
    /**
     * @var string[]
     */
    public $nodeGroupNames;
    /**
     * @var string[]
     */
    public $nodeGroupStates;
    /**
     * @var string[]
     */
    public $nodeGroupTypes;
    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'nodeGroupIds'    => 'NodeGroupIds',
        'nodeGroupNames'  => 'NodeGroupNames',
        'nodeGroupStates' => 'NodeGroupStates',
        'nodeGroupTypes'  => 'NodeGroupTypes',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupIds)) {
            Model::validateArray($this->nodeGroupIds);
        }
        if (\is_array($this->nodeGroupNames)) {
            Model::validateArray($this->nodeGroupNames);
        }
        if (\is_array($this->nodeGroupStates)) {
            Model::validateArray($this->nodeGroupStates);
        }
        if (\is_array($this->nodeGroupTypes)) {
            Model::validateArray($this->nodeGroupTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->nodeGroupIds) {
            if (\is_array($this->nodeGroupIds)) {
                $res['NodeGroupIds'] = [];
                $n1                  = 0;
                foreach ($this->nodeGroupIds as $item1) {
                    $res['NodeGroupIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeGroupNames) {
            if (\is_array($this->nodeGroupNames)) {
                $res['NodeGroupNames'] = [];
                $n1                    = 0;
                foreach ($this->nodeGroupNames as $item1) {
                    $res['NodeGroupNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeGroupStates) {
            if (\is_array($this->nodeGroupStates)) {
                $res['NodeGroupStates'] = [];
                $n1                     = 0;
                foreach ($this->nodeGroupStates as $item1) {
                    $res['NodeGroupStates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeGroupTypes) {
            if (\is_array($this->nodeGroupTypes)) {
                $res['NodeGroupTypes'] = [];
                $n1                    = 0;
                foreach ($this->nodeGroupTypes as $item1) {
                    $res['NodeGroupTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['NodeGroupIds'])) {
            if (!empty($map['NodeGroupIds'])) {
                $model->nodeGroupIds = [];
                $n1                  = 0;
                foreach ($map['NodeGroupIds'] as $item1) {
                    $model->nodeGroupIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeGroupNames'])) {
            if (!empty($map['NodeGroupNames'])) {
                $model->nodeGroupNames = [];
                $n1                    = 0;
                foreach ($map['NodeGroupNames'] as $item1) {
                    $model->nodeGroupNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeGroupStates'])) {
            if (!empty($map['NodeGroupStates'])) {
                $model->nodeGroupStates = [];
                $n1                     = 0;
                foreach ($map['NodeGroupStates'] as $item1) {
                    $model->nodeGroupStates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeGroupTypes'])) {
            if (!empty($map['NodeGroupTypes'])) {
                $model->nodeGroupTypes = [];
                $n1                    = 0;
                foreach ($map['NodeGroupTypes'] as $item1) {
                    $model->nodeGroupTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
