<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class SetDomainCertificateRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $certificatePrivateKey;

    /**
     * @var string
     */
    public $caCertificateBody;
    protected $_name = [
        'securityToken'         => 'SecurityToken',
        'groupId'               => 'GroupId',
        'domainName'            => 'DomainName',
        'certificateName'       => 'CertificateName',
        'certificateBody'       => 'CertificateBody',
        'certificatePrivateKey' => 'CertificatePrivateKey',
        'caCertificateBody'     => 'CaCertificateBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->certificatePrivateKey) {
            $res['CertificatePrivateKey'] = $this->certificatePrivateKey;
        }
        if (null !== $this->caCertificateBody) {
            $res['CaCertificateBody'] = $this->caCertificateBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainCertificateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['CertificatePrivateKey'])) {
            $model->certificatePrivateKey = $map['CertificatePrivateKey'];
        }
        if (isset($map['CaCertificateBody'])) {
            $model->caCertificateBody = $map['CaCertificateBody'];
        }

        return $model;
    }
}
