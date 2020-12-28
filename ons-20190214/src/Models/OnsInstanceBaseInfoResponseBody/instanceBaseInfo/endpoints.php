<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $tcpEndpoint;

    /**
     * @var string
     */
    public $httpInternetEndpoint;

    /**
     * @var string
     */
    public $httpInternalEndpoint;

    /**
     * @var string
     */
    public $httpInternetSecureEndpoint;
    protected $_name = [
        'tcpEndpoint'                => 'TcpEndpoint',
        'httpInternetEndpoint'       => 'HttpInternetEndpoint',
        'httpInternalEndpoint'       => 'HttpInternalEndpoint',
        'httpInternetSecureEndpoint' => 'HttpInternetSecureEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tcpEndpoint) {
            $res['TcpEndpoint'] = $this->tcpEndpoint;
        }
        if (null !== $this->httpInternetEndpoint) {
            $res['HttpInternetEndpoint'] = $this->httpInternetEndpoint;
        }
        if (null !== $this->httpInternalEndpoint) {
            $res['HttpInternalEndpoint'] = $this->httpInternalEndpoint;
        }
        if (null !== $this->httpInternetSecureEndpoint) {
            $res['HttpInternetSecureEndpoint'] = $this->httpInternetSecureEndpoint;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TcpEndpoint'])) {
            $model->tcpEndpoint = $map['TcpEndpoint'];
        }
        if (isset($map['HttpInternetEndpoint'])) {
            $model->httpInternetEndpoint = $map['HttpInternetEndpoint'];
        }
        if (isset($map['HttpInternalEndpoint'])) {
            $model->httpInternalEndpoint = $map['HttpInternalEndpoint'];
        }
        if (isset($map['HttpInternetSecureEndpoint'])) {
            $model->httpInternetSecureEndpoint = $map['HttpInternetSecureEndpoint'];
        }

        return $model;
    }
}
