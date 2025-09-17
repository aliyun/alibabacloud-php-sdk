<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesResponseBody\resource;
use AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\GetResourcesResponseBody\resources;

class GetResourcesResponseBody extends Model
{
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
    public $requestId;

    /**
     * @var resource
     */
    public $resource;

    /**
     * @var resources[]
     */
    public $resources;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'requestId' => 'requestId',
        'resource' => 'resource',
        'resources' => 'resources',
        'totalCount' => 'totalCount',
    ];

    public function validate()
    {
        if (null !== $this->resource) {
            $this->resource->validate();
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->resource) {
            $res['resource'] = null !== $this->resource ? $this->resource->toArray($noStream) : $this->resource;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
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
        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['resource'])) {
            $model->resource = resource::fromMap($map['resource']);
        }

        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
