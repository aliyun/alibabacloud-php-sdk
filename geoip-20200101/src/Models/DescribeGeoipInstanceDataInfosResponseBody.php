<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Geoip\V20200101\Models;

use AlibabaCloud\SDK\Geoip\V20200101\Models\DescribeGeoipInstanceDataInfosResponseBody\dataInfos;
use AlibabaCloud\Tea\Model;

class DescribeGeoipInstanceDataInfosResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dataInfos
     */
    public $dataInfos;
    protected $_name = [
        'requestId' => 'RequestId',
        'dataInfos' => 'DataInfos',
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
        if (null !== $this->dataInfos) {
            $res['DataInfos'] = null !== $this->dataInfos ? $this->dataInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGeoipInstanceDataInfosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DataInfos'])) {
            $model->dataInfos = dataInfos::fromMap($map['DataInfos']);
        }

        return $model;
    }
}
