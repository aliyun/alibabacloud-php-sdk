<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesRequest\filter;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServiceInstancesRequest\requestTags;
use AlibabaCloud\Tea\Model;

class ListServiceInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var filter[]
     */
    public $filter;

    /**
     * @var requestTags[]
     */
    public $requestTags;
    protected $_name = [
        'regionId'    => 'RegionId',
        'maxResults'  => 'MaxResults',
        'nextToken'   => 'NextToken',
        'filter'      => 'Filter',
        'requestTags' => 'RequestTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->filter) {
            $res['Filter'] = [];
            if (null !== $this->filter && \is_array($this->filter)) {
                $n = 0;
                foreach ($this->filter as $item) {
                    $res['Filter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestTags) {
            $res['RequestTags'] = [];
            if (null !== $this->requestTags && \is_array($this->requestTags)) {
                $n = 0;
                foreach ($this->requestTags as $item) {
                    $res['RequestTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Filter'])) {
            if (!empty($map['Filter'])) {
                $model->filter = [];
                $n             = 0;
                foreach ($map['Filter'] as $item) {
                    $model->filter[$n++] = null !== $item ? filter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestTags'])) {
            if (!empty($map['RequestTags'])) {
                $model->requestTags = [];
                $n                  = 0;
                foreach ($map['RequestTags'] as $item) {
                    $model->requestTags[$n++] = null !== $item ? requestTags::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
