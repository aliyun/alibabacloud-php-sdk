<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class SetDomainRequest extends Model
{
    /**
     * @var string
     */
    public $bindStageName;

    /**
     * @var string
     */
    public $certificateBody;

    /**
     * @var string
     */
    public $certificateName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var bool
     */
    public $isForce;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'bindStageName'   => 'BindStageName',
        'certificateBody' => 'CertificateBody',
        'certificateName' => 'CertificateName',
        'domainName'      => 'DomainName',
        'groupId'         => 'GroupId',
        'isForce'         => 'IsForce',
        'privateKey'      => 'PrivateKey',
        'securityToken'   => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStageName) {
            $res['BindStageName'] = $this->bindStageName;
        }
        if (null !== $this->certificateBody) {
            $res['CertificateBody'] = $this->certificateBody;
        }
        if (null !== $this->certificateName) {
            $res['CertificateName'] = $this->certificateName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->isForce) {
            $res['IsForce'] = $this->isForce;
        }
        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStageName'])) {
            $model->bindStageName = $map['BindStageName'];
        }
        if (isset($map['CertificateBody'])) {
            $model->certificateBody = $map['CertificateBody'];
        }
        if (isset($map['CertificateName'])) {
            $model->certificateName = $map['CertificateName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['IsForce'])) {
            $model->isForce = $map['IsForce'];
        }
        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
