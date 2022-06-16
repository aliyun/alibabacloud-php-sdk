<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class SdkValidateStatusRequest extends Model
{
    /**
     * @description 应用名称
     *
     * @var string
     */
    public $appId;

    /**
     * @description 凭证类型
     *
     * @var string
     */
    public $credentialType;

    /**
     * @description mobile=150xxxx4661
     *
     * @var string
     */
    public $credentialValue;

    /**
     * @description 取值包括cm（中国移动）/ct（中国电信）/cu（中国联通）
     *
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'appId'           => 'AppId',
        'credentialType'  => 'CredentialType',
        'credentialValue' => 'CredentialValue',
        'operator'        => 'Operator',
        'token'           => 'Token',
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
        if (null !== $this->credentialType) {
            $res['CredentialType'] = $this->credentialType;
        }
        if (null !== $this->credentialValue) {
            $res['CredentialValue'] = $this->credentialValue;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SdkValidateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CredentialType'])) {
            $model->credentialType = $map['CredentialType'];
        }
        if (isset($map['CredentialValue'])) {
            $model->credentialValue = $map['CredentialValue'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
