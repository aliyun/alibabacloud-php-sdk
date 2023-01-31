<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateCommonBandwidthPackageResponseBody extends Model
{
    /**
     * @example cbwp-bp1vevu8h3ieh****
     *
     * @var string
     */
    public $bandwidthPackageId;

    /**
     * @example FF39F653-033E-4CD9-9EDF-3CCA5A71FBC3
     *
     * @var string
     */
    public $requestId;

    /**
     * @example rg-acfmxazdjdhd****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'bandwidthPackageId' => 'BandwidthPackageId',
        'requestId'          => 'RequestId',
        'resourceGroupId'    => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPackageId) {
            $res['BandwidthPackageId'] = $this->bandwidthPackageId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCommonBandwidthPackageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPackageId'])) {
            $model->bandwidthPackageId = $map['BandwidthPackageId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
