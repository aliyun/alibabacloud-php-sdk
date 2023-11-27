<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateCallbackConfigResponseBody\result\imConfig;

use AlibabaCloud\Tea\Model;

class callbackConfig extends Model
{
    /**
     * @var string[]
     */
    public $apiIds;

    /**
     * @example http://test.com
     *
     * @var string
     */
    public $backendUrl;

    /**
     * @example aaa111_0
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @example 3324ewfcsf34r
     *
     * @var string
     */
    public $signatureValue;
    protected $_name = [
        'apiIds'         => 'ApiIds',
        'backendUrl'     => 'BackendUrl',
        'signatureKey'   => 'SignatureKey',
        'signatureValue' => 'SignatureValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiIds) {
            $res['ApiIds'] = $this->apiIds;
        }
        if (null !== $this->backendUrl) {
            $res['BackendUrl'] = $this->backendUrl;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
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
        if (isset($map['ApiIds'])) {
            if (!empty($map['ApiIds'])) {
                $model->apiIds = $map['ApiIds'];
            }
        }
        if (isset($map['BackendUrl'])) {
            $model->backendUrl = $map['BackendUrl'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }

        return $model;
    }
}
