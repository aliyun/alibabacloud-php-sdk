<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result\imConfig;

use AlibabaCloud\Tea\Model;

class callbackConfig extends Model
{
    /**
     * @description 回调url，支持外部url
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @description 加签密钥-key
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @description 加签密钥-value
     *
     * @var string
     */
    public $signatureValue;

    /**
     * @description 已开通的回调方法Id列表
     *
     * @var bool[]
     */
    public $apis;
    protected $_name = [
        'callbackUrl'    => 'CallbackUrl',
        'signatureKey'   => 'SignatureKey',
        'signatureValue' => 'SignatureValue',
        'apis'           => 'Apis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }
        if (null !== $this->apis) {
            $res['Apis'] = $this->apis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callbackConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }
        if (isset($map['Apis'])) {
            $model->apis = $map['Apis'];
        }

        return $model;
    }
}
