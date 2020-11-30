<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Tea\Model;

class DescribeElasticBandwidthSpecResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $elasticBandwidthSpec;
    protected $_name = [
        'requestId'            => 'RequestId',
        'elasticBandwidthSpec' => 'ElasticBandwidthSpec',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('elasticBandwidthSpec', $this->elasticBandwidthSpec, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->elasticBandwidthSpec) {
            $res['ElasticBandwidthSpec'] = $this->elasticBandwidthSpec;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeElasticBandwidthSpecResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ElasticBandwidthSpec'])) {
            if (!empty($map['ElasticBandwidthSpec'])) {
                $model->elasticBandwidthSpec = $map['ElasticBandwidthSpec'];
            }
        }

        return $model;
    }
}
