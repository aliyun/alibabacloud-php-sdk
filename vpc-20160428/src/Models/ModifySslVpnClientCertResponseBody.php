<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class ModifySslVpnClientCertResponseBody extends Model
{
    /**
     * @description The name of the SSL client certificate.
     *
     * @example cert2
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example 606998F0-B94D-48FE-8316-ACA81BB230DA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the SSL-VPN client certificate.
     *
     * @example vsc-bp1n8wcf134yl0osr****
     *
     * @var string
     */
    public $sslVpnClientCertId;
    protected $_name = [
        'name'               => 'Name',
        'requestId'          => 'RequestId',
        'sslVpnClientCertId' => 'SslVpnClientCertId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sslVpnClientCertId) {
            $res['SslVpnClientCertId'] = $this->sslVpnClientCertId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifySslVpnClientCertResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SslVpnClientCertId'])) {
            $model->sslVpnClientCertId = $map['SslVpnClientCertId'];
        }

        return $model;
    }
}
