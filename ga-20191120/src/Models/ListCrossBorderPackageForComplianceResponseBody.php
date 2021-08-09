<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListCrossBorderPackageForComplianceResponseBody\bandwidthPackages;
use AlibabaCloud\Tea\Model;

class ListCrossBorderPackageForComplianceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bandwidthPackages[]
     */
    public $bandwidthPackages;
    protected $_name = [
        'requestId'         => 'RequestId',
        'totalCount'        => 'TotalCount',
        'nextToken'         => 'NextToken',
        'maxResults'        => 'MaxResults',
        'bandwidthPackages' => 'BandwidthPackages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->bandwidthPackages) {
            $res['BandwidthPackages'] = [];
            if (null !== $this->bandwidthPackages && \is_array($this->bandwidthPackages)) {
                $n = 0;
                foreach ($this->bandwidthPackages as $item) {
                    $res['BandwidthPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCrossBorderPackageForComplianceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['BandwidthPackages'])) {
            if (!empty($map['BandwidthPackages'])) {
                $model->bandwidthPackages = [];
                $n                        = 0;
                foreach ($map['BandwidthPackages'] as $item) {
                    $model->bandwidthPackages[$n++] = null !== $item ? bandwidthPackages::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
