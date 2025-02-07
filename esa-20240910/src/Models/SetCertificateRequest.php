<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class SetCertificateRequest extends Model
{
    /**
     * @var int
     */
    public $casId;
    /**
     * @var string
     */
    public $certificate;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string
     */
    public $privateKey;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var string
     */
    public $type;
    /**
     * @var bool
     */
    public $update;
    protected $_name = [
        'casId'         => 'CasId',
        'certificate'   => 'Certificate',
        'id'            => 'Id',
        'name'          => 'Name',
        'ownerId'       => 'OwnerId',
        'privateKey'    => 'PrivateKey',
        'region'        => 'Region',
        'securityToken' => 'SecurityToken',
        'siteId'        => 'SiteId',
        'type'          => 'Type',
        'update'        => 'Update',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->casId) {
            $res['CasId'] = $this->casId;
        }

        if (null !== $this->certificate) {
            $res['Certificate'] = $this->certificate;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->privateKey) {
            $res['PrivateKey'] = $this->privateKey;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->update) {
            $res['Update'] = $this->update;
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
        if (isset($map['CasId'])) {
            $model->casId = $map['CasId'];
        }

        if (isset($map['Certificate'])) {
            $model->certificate = $map['Certificate'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PrivateKey'])) {
            $model->privateKey = $map['PrivateKey'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Update'])) {
            $model->update = $map['Update'];
        }

        return $model;
    }
}
