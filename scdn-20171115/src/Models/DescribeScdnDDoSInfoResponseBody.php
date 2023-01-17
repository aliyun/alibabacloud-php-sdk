<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\Tea\Model;

class DescribeScdnDDoSInfoResponseBody extends Model
{
    /**
     * @example 80
     *
     * @var int
     */
    public $elasticBandwidth;

    /**
     * @example BFFCDFAD-DACC-484E-9BE6-0AF3B3A0DD23
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
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
