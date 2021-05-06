<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result\imConfig;

use AlibabaCloud\Tea\Model;

class callbackConfig extends Model
{
    /**
     * @description 回调url
     *
     * @var string
     */
    public $backendUrl;

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
     * @description 回调方法列表
     *
     * @var string[]
     */
    public $apiIds;
    protected $_name = [
        'backendUrl'     => 'BackendUrl',
        'signatureKey'   => 'SignatureKey',
        'signatureValue' => 'SignatureValue',
        'apiIds'         => 'ApiIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendUrl) {
            $res['BackendUrl'] = $this->backendUrl;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
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
        if (isset($map['BackendUrl'])) {
            $model->backendUrl = $map['BackendUrl'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }
        if (isset($map['ApiIds'])) {
            if (!empty($map['ApiIds'])) {
                $model->apiIds = $map['ApiIds'];
            }
        }

        return $model;
    }
}
