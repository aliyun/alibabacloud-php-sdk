<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class RegistDRMCertInfoRequest extends Model
{
    /**
     * @var string
     */
    public $ask;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $passPhrase;

    /**
     * @var string
     */
    public $privateKey;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $resourceRealOwnerId;

    /**
     * @var string
     */
    public $servCert;
    protected $_name = [
        'ask' => 'Ask',
        'certName' => 'CertName',
        'description' => 'Description',
        'ownerId' => 'OwnerId',
        'passPhrase' => 'PassPhrase',
        'privateKey' => 'PrivateKey',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceRealOwnerId' => 'ResourceRealOwnerId',
        'servCert' => 'ServCert',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ask) {
            $res['Ask'] = $this->ask;
        }

        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->passPhrase) {
            $res['PassPhrase'] = $this->passPhrase;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceRealOwnerId) {
            $res['ResourceRealOwnerId'] = $this->resourceRealOwnerId;
        }

        if (null !== $this->servCert) {
            $res['ServCert'] = $this->servCert;
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
        if (isset($map['Ask'])) {
            $model->ask = $map['Ask'];
        }

        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PassPhrase'])) {
            $model->passPhrase = $map['PassPhrase'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceRealOwnerId'])) {
            $model->resourceRealOwnerId = $map['ResourceRealOwnerId'];
        }

        if (isset($map['ServCert'])) {
            $model->servCert = $map['ServCert'];
        }

        return $model;
    }
}
