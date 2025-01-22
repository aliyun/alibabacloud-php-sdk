<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetIdpConfigResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKey;
    /**
     * @var string
     */
    public $accessKeySecret;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $getGroupUrl;
    /**
     * @var string
     */
    public $id;
    /**
     * @var string
     */
    public $idpMetadata;
    /**
     * @var string
     */
    public $mfaConfigType;
    /**
     * @var string
     */
    public $mobileLoginType;
    /**
     * @var string
     */
    public $mobileMfaConfigType;
    /**
     * @var string
     */
    public $multiIdpInfo;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $pcLoginType;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $type;
    /**
     * @var string
     */
    public $updateTime;
    /**
     * @var string
     */
    public $verifyAesKey;
    /**
     * @var string
     */
    public $verifyToken;
    /**
     * @var string
     */
    public $verifyUrl;
    protected $_name = [
        'accessKey'           => 'AccessKey',
        'accessKeySecret'     => 'AccessKeySecret',
        'description'         => 'Description',
        'getGroupUrl'         => 'GetGroupUrl',
        'id'                  => 'Id',
        'idpMetadata'         => 'IdpMetadata',
        'mfaConfigType'       => 'MfaConfigType',
        'mobileLoginType'     => 'MobileLoginType',
        'mobileMfaConfigType' => 'MobileMfaConfigType',
        'multiIdpInfo'        => 'MultiIdpInfo',
        'name'                => 'Name',
        'pcLoginType'         => 'PcLoginType',
        'status'              => 'Status',
        'type'                => 'Type',
        'updateTime'          => 'UpdateTime',
        'verifyAesKey'        => 'VerifyAesKey',
        'verifyToken'         => 'VerifyToken',
        'verifyUrl'           => 'VerifyUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }

        if (null !== $this->accessKeySecret) {
            $res['AccessKeySecret'] = $this->accessKeySecret;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->getGroupUrl) {
            $res['GetGroupUrl'] = $this->getGroupUrl;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idpMetadata) {
            $res['IdpMetadata'] = $this->idpMetadata;
        }

        if (null !== $this->mfaConfigType) {
            $res['MfaConfigType'] = $this->mfaConfigType;
        }

        if (null !== $this->mobileLoginType) {
            $res['MobileLoginType'] = $this->mobileLoginType;
        }

        if (null !== $this->mobileMfaConfigType) {
            $res['MobileMfaConfigType'] = $this->mobileMfaConfigType;
        }

        if (null !== $this->multiIdpInfo) {
            $res['MultiIdpInfo'] = $this->multiIdpInfo;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pcLoginType) {
            $res['PcLoginType'] = $this->pcLoginType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->verifyAesKey) {
            $res['VerifyAesKey'] = $this->verifyAesKey;
        }

        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
        }

        if (null !== $this->verifyUrl) {
            $res['VerifyUrl'] = $this->verifyUrl;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }

        if (isset($map['AccessKeySecret'])) {
            $model->accessKeySecret = $map['AccessKeySecret'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GetGroupUrl'])) {
            $model->getGroupUrl = $map['GetGroupUrl'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdpMetadata'])) {
            $model->idpMetadata = $map['IdpMetadata'];
        }

        if (isset($map['MfaConfigType'])) {
            $model->mfaConfigType = $map['MfaConfigType'];
        }

        if (isset($map['MobileLoginType'])) {
            $model->mobileLoginType = $map['MobileLoginType'];
        }

        if (isset($map['MobileMfaConfigType'])) {
            $model->mobileMfaConfigType = $map['MobileMfaConfigType'];
        }

        if (isset($map['MultiIdpInfo'])) {
            $model->multiIdpInfo = $map['MultiIdpInfo'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PcLoginType'])) {
            $model->pcLoginType = $map['PcLoginType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VerifyAesKey'])) {
            $model->verifyAesKey = $map['VerifyAesKey'];
        }

        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }

        if (isset($map['VerifyUrl'])) {
            $model->verifyUrl = $map['VerifyUrl'];
        }

        return $model;
    }
}
