<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Dara\Model;

class ListClustersRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var string[]
     */
    public $clusterStates;

    /**
     * @var string[]
     */
    public $clusterTypes;

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
    public $paymentTypes;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var Tag[]
     */
    public $tags;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
        'clusterName' => 'ClusterName',
        'clusterStates' => 'ClusterStates',
        'clusterTypes' => 'ClusterTypes',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'paymentTypes' => 'PaymentTypes',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tags' => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->clusterIds)) {
            Model::validateArray($this->clusterIds);
        }
        if (\is_array($this->clusterStates)) {
            Model::validateArray($this->clusterStates);
        }
        if (\is_array($this->clusterTypes)) {
            Model::validateArray($this->clusterTypes);
        }
        if (\is_array($this->paymentTypes)) {
            Model::validateArray($this->paymentTypes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterIds) {
            if (\is_array($this->clusterIds)) {
                $res['ClusterIds'] = [];
                $n1 = 0;
                foreach ($this->clusterIds as $item1) {
                    $res['ClusterIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->clusterStates) {
            if (\is_array($this->clusterStates)) {
                $res['ClusterStates'] = [];
                $n1 = 0;
                foreach ($this->clusterStates as $item1) {
                    $res['ClusterStates'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clusterTypes) {
            if (\is_array($this->clusterTypes)) {
                $res['ClusterTypes'] = [];
                $n1 = 0;
                foreach ($this->clusterTypes as $item1) {
                    $res['ClusterTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->paymentTypes) {
            if (\is_array($this->paymentTypes)) {
                $res['PaymentTypes'] = [];
                $n1 = 0;
                foreach ($this->paymentTypes as $item1) {
                    $res['PaymentTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = [];
                $n1 = 0;
                foreach ($map['ClusterIds'] as $item1) {
                    $model->clusterIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['ClusterStates'])) {
            if (!empty($map['ClusterStates'])) {
                $model->clusterStates = [];
                $n1 = 0;
                foreach ($map['ClusterStates'] as $item1) {
                    $model->clusterStates[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClusterTypes'])) {
            if (!empty($map['ClusterTypes'])) {
                $model->clusterTypes = [];
                $n1 = 0;
                foreach ($map['ClusterTypes'] as $item1) {
                    $model->clusterTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['PaymentTypes'])) {
            if (!empty($map['PaymentTypes'])) {
                $model->paymentTypes = [];
                $n1 = 0;
                foreach ($map['PaymentTypes'] as $item1) {
                    $model->paymentTypes[$n1] = $item1;
                    ++$n1;
                }
            }
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
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
