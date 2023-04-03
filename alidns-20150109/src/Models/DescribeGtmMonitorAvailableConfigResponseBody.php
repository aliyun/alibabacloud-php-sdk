<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorAvailableConfigResponseBody\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorAvailableConfigResponseBody extends Model
{
    /**
     * @description The monitored nodes.
     *
     * @var ispCityNodes
     */
    public $ispCityNodes;

    /**
     * @description The ID of the request.
     *
     * @example 6856BCF6-11D6-4D7E-AC53-FD579933522B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ispCityNodes' => 'IspCityNodes',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = null !== $this->ispCityNodes ? $this->ispCityNodes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmMonitorAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IspCityNodes'])) {
            $model->ispCityNodes = ispCityNodes::fromMap($map['IspCityNodes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
