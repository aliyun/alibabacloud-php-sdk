<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class ValidateStatusRequest extends Model
{
    /**
     * @description 阿里UID
     *
     * @var int
     */
    public $aliUid;

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
    protected $_name = [
        'aliUid'          => 'AliUid',
        'appId'           => 'AppId',
        'credentialType'  => 'CredentialType',
        'credentialValue' => 'CredentialValue',
        'operator'        => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
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

        return $model;
    }
}
