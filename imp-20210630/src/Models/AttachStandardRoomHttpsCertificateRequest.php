<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models;

use AlibabaCloud\Tea\Model;

class AttachStandardRoomHttpsCertificateRequest extends Model
{
    /**
     * @description 应用唯一标识
     *
     * @var string
     */
    public $appId;

    /**
     * @description 使用证书的确切域名
     *
     * @var string
     */
    public $domainName;

    /**
     * @description NGINX格式证书公钥
     *
     * @var string
     */
    public $certificatePublicKey;

    /**
     * @description NGINX格式证书私钥
     *
     * @var string
     */
    public $certificatePrivateKey;
    protected $_name = [
        'appId'                 => 'AppId',
        'domainName'            => 'DomainName',
        'certificatePublicKey'  => 'CertificatePublicKey',
        'certificatePrivateKey' => 'CertificatePrivateKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->certificatePublicKey) {
            $res['CertificatePublicKey'] = $this->certificatePublicKey;
        }
        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AttachStandardRoomHttpsCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CertificatePublicKey'])) {
            $model->certificatePublicKey = $map['CertificatePublicKey'];
        }
        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }

        return $model;
    }
}
