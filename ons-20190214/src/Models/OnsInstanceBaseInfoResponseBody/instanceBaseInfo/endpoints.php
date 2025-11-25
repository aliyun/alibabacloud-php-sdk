<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsInstanceBaseInfoResponseBody\instanceBaseInfo;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $httpInternalEndpoint;

    /**
     * @var string
     */
    public $httpInternetEndpoint;

    /**
     * @var string
     */
    public $httpInternetSecureEndpoint;

    /**
     * @var string
     */
    public $tcpEndpoint;

    /**
     * @var string
     */
    public $tcpInternetEndpoint;
    protected $_name = [
        'httpInternalEndpoint' => 'HttpInternalEndpoint',
        'httpInternetEndpoint' => 'HttpInternetEndpoint',
        'httpInternetSecureEndpoint' => 'HttpInternetSecureEndpoint',
        'tcpEndpoint' => 'TcpEndpoint',
        'tcpInternetEndpoint' => 'TcpInternetEndpoint',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpInternalEndpoint) {
            $res['HttpInternalEndpoint'] = $this->httpInternalEndpoint;
        }

        if (null !== $this->httpInternetEndpoint) {
            $res['HttpInternetEndpoint'] = $this->httpInternetEndpoint;
        }

        if (null !== $this->httpInternetSecureEndpoint) {
            $res['HttpInternetSecureEndpoint'] = $this->httpInternetSecureEndpoint;
        }

        if (null !== $this->tcpEndpoint) {
            $res['TcpEndpoint'] = $this->tcpEndpoint;
        }

        if (null !== $this->tcpInternetEndpoint) {
            $res['TcpInternetEndpoint'] = $this->tcpInternetEndpoint;
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
        if (isset($map['HttpInternalEndpoint'])) {
            $model->httpInternalEndpoint = $map['HttpInternalEndpoint'];
        }

        if (isset($map['HttpInternetEndpoint'])) {
            $model->httpInternetEndpoint = $map['HttpInternetEndpoint'];
        }

        if (isset($map['HttpInternetSecureEndpoint'])) {
            $model->httpInternetSecureEndpoint = $map['HttpInternetSecureEndpoint'];
        }

        if (isset($map['TcpEndpoint'])) {
            $model->tcpEndpoint = $map['TcpEndpoint'];
        }

        if (isset($map['TcpInternetEndpoint'])) {
            $model->tcpInternetEndpoint = $map['TcpInternetEndpoint'];
        }

        return $model;
    }
}
