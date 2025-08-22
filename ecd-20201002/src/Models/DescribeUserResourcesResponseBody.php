<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20201002\Models\DescribeUserResourcesResponseBody\resources;

class DescribeUserResourcesResponseBody extends Model
{
    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string[]
     */
    public $queryFailedResourceTypes;

    /**
     * @var int
     */
    public $rankVersion;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'nextToken' => 'NextToken',
        'queryFailedResourceTypes' => 'QueryFailedResourceTypes',
        'rankVersion' => 'RankVersion',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
        if (\is_array($this->queryFailedResourceTypes)) {
            Model::validateArray($this->queryFailedResourceTypes);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->queryFailedResourceTypes) {
            if (\is_array($this->queryFailedResourceTypes)) {
                $res['QueryFailedResourceTypes'] = [];
                $n1 = 0;
                foreach ($this->queryFailedResourceTypes as $item1) {
                    $res['QueryFailedResourceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rankVersion) {
            $res['RankVersion'] = $this->rankVersion;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['Resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['Resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['QueryFailedResourceTypes'])) {
            if (!empty($map['QueryFailedResourceTypes'])) {
                $model->queryFailedResourceTypes = [];
                $n1 = 0;
                foreach ($map['QueryFailedResourceTypes'] as $item1) {
                    $model->queryFailedResourceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RankVersion'])) {
            $model->rankVersion = $map['RankVersion'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Resources'])) {
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['Resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
