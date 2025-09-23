<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;

class DescribeElasticBandwidthSpecResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $elasticBandwidthSpec;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'elasticBandwidthSpec' => 'ElasticBandwidthSpec',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->elasticBandwidthSpec)) {
            Model::validateArray($this->elasticBandwidthSpec);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elasticBandwidthSpec) {
            if (\is_array($this->elasticBandwidthSpec)) {
                $res['ElasticBandwidthSpec'] = [];
                $n1 = 0;
                foreach ($this->elasticBandwidthSpec as $item1) {
                    $res['ElasticBandwidthSpec'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ElasticBandwidthSpec'])) {
            if (!empty($map['ElasticBandwidthSpec'])) {
                $model->elasticBandwidthSpec = [];
                $n1 = 0;
                foreach ($map['ElasticBandwidthSpec'] as $item1) {
                    $model->elasticBandwidthSpec[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
