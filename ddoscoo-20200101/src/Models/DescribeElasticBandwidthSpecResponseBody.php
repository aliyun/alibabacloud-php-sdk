<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticBandwidthSpecResponseBody extends Model
{
    /**
     * @description An array that consists of the available burstable protection bandwidths. Unit: Gbit/s.
     *
     * @var string[]
     */
    public $elasticBandwidthSpec;

    /**
     * @description The ID of the request.
     *
     * @example 0bcf28g5-d57c-11e7-9bs0-d89d6717dxbc
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticBandwidthSpec' => 'ElasticBandwidthSpec',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticBandwidthSpec) {
            $res['ElasticBandwidthSpec'] = $this->elasticBandwidthSpec;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticBandwidthSpecResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticBandwidthSpec'])) {
            if (!empty($map['ElasticBandwidthSpec'])) {
                $model->elasticBandwidthSpec = $map['ElasticBandwidthSpec'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
