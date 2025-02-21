<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListNodesRequest extends Model
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
    public $nodeIds;
    /**
     * @var string[]
     */
    public $nodeNames;
    /**
     * @var string[]
     */
    public $nodeStates;
    /**
     * @var string[]
     */
    public $privateIps;
    /**
     * @var string[]
     */
    public $publicIps;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterId'    => 'ClusterId',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'nodeGroupIds' => 'NodeGroupIds',
        'nodeIds'      => 'NodeIds',
        'nodeNames'    => 'NodeNames',
        'nodeStates'   => 'NodeStates',
        'privateIps'   => 'PrivateIps',
        'publicIps'    => 'PublicIps',
        'regionId'     => 'RegionId',
        'tags'         => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->nodeGroupIds)) {
            Model::validateArray($this->nodeGroupIds);
        }
        if (\is_array($this->nodeIds)) {
            Model::validateArray($this->nodeIds);
        }
        if (\is_array($this->nodeNames)) {
            Model::validateArray($this->nodeNames);
        }
        if (\is_array($this->nodeStates)) {
            Model::validateArray($this->nodeStates);
        }
        if (\is_array($this->privateIps)) {
            Model::validateArray($this->privateIps);
        }
        if (\is_array($this->publicIps)) {
            Model::validateArray($this->publicIps);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
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

        if (null !== $this->nodeIds) {
            if (\is_array($this->nodeIds)) {
                $res['NodeIds'] = [];
                $n1             = 0;
                foreach ($this->nodeIds as $item1) {
                    $res['NodeIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeNames) {
            if (\is_array($this->nodeNames)) {
                $res['NodeNames'] = [];
                $n1               = 0;
                foreach ($this->nodeNames as $item1) {
                    $res['NodeNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->nodeStates) {
            if (\is_array($this->nodeStates)) {
                $res['NodeStates'] = [];
                $n1                = 0;
                foreach ($this->nodeStates as $item1) {
                    $res['NodeStates'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->privateIps) {
            if (\is_array($this->privateIps)) {
                $res['PrivateIps'] = [];
                $n1                = 0;
                foreach ($this->privateIps as $item1) {
                    $res['PrivateIps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->publicIps) {
            if (\is_array($this->publicIps)) {
                $res['PublicIps'] = [];
                $n1               = 0;
                foreach ($this->publicIps as $item1) {
                    $res['PublicIps'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['NodeIds'])) {
            if (!empty($map['NodeIds'])) {
                $model->nodeIds = [];
                $n1             = 0;
                foreach ($map['NodeIds'] as $item1) {
                    $model->nodeIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeNames'])) {
            if (!empty($map['NodeNames'])) {
                $model->nodeNames = [];
                $n1               = 0;
                foreach ($map['NodeNames'] as $item1) {
                    $model->nodeNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['NodeStates'])) {
            if (!empty($map['NodeStates'])) {
                $model->nodeStates = [];
                $n1                = 0;
                foreach ($map['NodeStates'] as $item1) {
                    $model->nodeStates[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PrivateIps'])) {
            if (!empty($map['PrivateIps'])) {
                $model->privateIps = [];
                $n1                = 0;
                foreach ($map['PrivateIps'] as $item1) {
                    $model->privateIps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PublicIps'])) {
            if (!empty($map['PublicIps'])) {
                $model->publicIps = [];
                $n1               = 0;
                foreach ($map['PublicIps'] as $item1) {
                    $model->publicIps[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
