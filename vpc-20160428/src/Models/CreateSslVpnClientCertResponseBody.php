<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateSslVpnClientCertResponseBody extends Model
{
    /**
     * @example SslVpnClientCert
     *
     * @var string
     */
    public $name;

    /**
     * @example 079874CD-AEC1-43E6-AC03-ADD96B6E4907
     *
     * @var string
     */
    public $requestId;

    /**
     * @example vsc-m5euof6s5jy8vs5kd****
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
     * @return CreateSslVpnClientCertResponseBody
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
