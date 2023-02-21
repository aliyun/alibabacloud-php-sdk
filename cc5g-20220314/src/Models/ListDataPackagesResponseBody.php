<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\SDK\CC5G\V20220314\Models\ListDataPackagesResponseBody\dataPackages;
use AlibabaCloud\Tea\Model;

class ListDataPackagesResponseBody extends Model
{
    /**
     * @var dataPackages[]
     */
    public $dataPackages;

    /**
     * @example 10
     *
     * @var string
     */
    public $maxResults;

    /**
     * @example iou001238joojjaere
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 8734B5B2-FC84-54C4-8038-D40228CF01FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'dataPackages' => 'DataPackages',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataPackages) {
            $res['DataPackages'] = [];
            if (null !== $this->dataPackages && \is_array($this->dataPackages)) {
                $n = 0;
                foreach ($this->dataPackages as $item) {
                    $res['DataPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataPackagesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataPackages'])) {
            if (!empty($map['DataPackages'])) {
                $model->dataPackages = [];
                $n                   = 0;
                foreach ($map['DataPackages'] as $item) {
                    $model->dataPackages[$n++] = null !== $item ? dataPackages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
