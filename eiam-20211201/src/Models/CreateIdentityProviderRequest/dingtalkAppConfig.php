<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\CreateIdentityProviderRequest;

use AlibabaCloud\Tea\Model;

class dingtalkAppConfig extends Model
{
    /**
     * @description 钉钉一方应用的AppKey
     *
     * @example Xczngvfemo4e
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 钉钉一方应用的AppSecret
     *
     * @example 5d405a12a6f84ad4ab05ee09axxxx
     *
     * @var string
     */
    public $appSecret;

    /**
     * @description 钉钉一方应用的corpId
     *
     * @example 3075680424786133505
     *
     * @var string
     */
    public $corpId;

    /**
     * @description 钉钉版本
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
