<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListOpenAccountsResponseBody;

use AlibabaCloud\Tea\Model;

class openAccounts extends Model
{
    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $aliyunId;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string
     */
    public $loginId;

    /**
     * @var string
     */
    public $idp;

    /**
     * @var string
     */
    public $openId;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $createAccessKey;
    protected $_name = [
        'identityId'      => 'IdentityId',
        'aliyunId'        => 'AliyunId',
        'displayName'     => 'DisplayName',
        'loginId'         => 'LoginId',
        'idp'             => 'Idp',
        'openId'          => 'OpenId',
        'mobile'          => 'Mobile',
        'type'            => 'Type',
        'status'          => 'Status',
        'region'          => 'Region',
        'createAccessKey' => 'CreateAccessKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->aliyunId) {
            $res['AliyunId'] = $this->aliyunId;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->loginId) {
            $res['LoginId'] = $this->loginId;
        }
        if (null !== $this->idp) {
            $res['Idp'] = $this->idp;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->createAccessKey) {
            $res['CreateAccessKey'] = $this->createAccessKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return openAccounts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['AliyunId'])) {
            $model->aliyunId = $map['AliyunId'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['LoginId'])) {
            $model->loginId = $map['LoginId'];
        }
        if (isset($map['Idp'])) {
            $model->idp = $map['Idp'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['CreateAccessKey'])) {
            $model->createAccessKey = $map['CreateAccessKey'];
        }

        return $model;
    }
}
