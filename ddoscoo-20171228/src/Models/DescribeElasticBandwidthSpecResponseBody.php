<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticBandwidthSpecResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $elasticBandwidthSpec;

    /**
     * @example CF33B4C3-196E-4015-AADD-5CAD00057B80
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
