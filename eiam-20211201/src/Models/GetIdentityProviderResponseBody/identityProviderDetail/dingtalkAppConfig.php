<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail;

use AlibabaCloud\Tea\Model;

class dingtalkAppConfig extends Model
{
    /**
     * @description IDaaS EIAM 钉钉一方应用的AppKey
     *
     * @example 41reopmwoy9s
     *
     * @var string
     */
    public $appKey;

    /**
     * @description IDaaS EIAM 钉钉一方应用的AppSecret
     *
     * @example REOQ6Cl55kriOd8NOBeqWYLKpHR4p6fdZxxxx
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description IDaaS EIAM 钉钉一方应用的corpId
     *
     * @example 3756043633237690761
     *
     * @var string
     */
    public $corpId;

    /**
     * @description IDaaS EIAM 钉钉版本
     *
     * @example public_dingtalk
     *
     * @var string
     */
    public $dingtalkVersion;
    protected $_name = [
        'appKey'          => 'AppKey',
        'appSecret'       => 'AppSecret',
        'corpId'          => 'CorpId',
        'dingtalkVersion' => 'DingtalkVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->appSecret) {
            $res['AppSecret'] = $this->appSecret;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->dingtalkVersion) {
            $res['DingtalkVersion'] = $this->dingtalkVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dingtalkAppConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['AppSecret'])) {
            $model->appSecret = $map['AppSecret'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['DingtalkVersion'])) {
            $model->dingtalkVersion = $map['DingtalkVersion'];
        }

        return $model;
    }
}
