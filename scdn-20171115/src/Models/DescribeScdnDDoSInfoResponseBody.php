<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class DescribeScdnDDoSInfoResponseBody extends Model
{
    /**
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $secBandwidth;
    protected $_name = [
        'elasticBandwidth' => 'ElasticBandwidth',
        'requestId'        => 'RequestId',
        'secBandwidth'     => 'SecBandwidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elasticBandwidth) {
            $res['ElasticBandwidth'] = $this->elasticBandwidth;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secBandwidth) {
            $res['SecBandwidth'] = $this->secBandwidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnDDoSInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ElasticBandwidth'])) {
            $model->elasticBandwidth = $map['ElasticBandwidth'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecBandwidth'])) {
            $model->secBandwidth = $map['SecBandwidth'];
        }

        return $model;
    }
}
