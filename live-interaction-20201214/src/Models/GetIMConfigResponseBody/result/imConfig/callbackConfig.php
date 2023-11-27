<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetIMConfigResponseBody\result\imConfig;

use AlibabaCloud\Tea\Model;

class callbackConfig extends Model
{
    /**
     * @var bool[]
     */
    public $apis;

    /**
     * @example http://test.com
     *
     * @var string
     */
    public $callbackUrl;

    /**
     * @var bool[]
     */
    public $events;

    /**
     * @example apitest_0
     *
     * @var string
     */
    public $signatureKey;

    /**
     * @example sfwefwefwef
     *
     * @var string
     */
    public $signatureValue;

    /**
     * @var bool[]
     */
    public $spis;
    protected $_name = [
        'apis'           => 'Apis',
        'callbackUrl'    => 'CallbackUrl',
        'events'         => 'Events',
        'signatureKey'   => 'SignatureKey',
        'signatureValue' => 'SignatureValue',
        'spis'           => 'Spis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apis) {
            $res['Apis'] = $this->apis;
        }
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }
        if (null !== $this->signatureKey) {
            $res['SignatureKey'] = $this->signatureKey;
        }
        if (null !== $this->signatureValue) {
            $res['SignatureValue'] = $this->signatureValue;
        }
        if (null !== $this->spis) {
            $res['Spis'] = $this->spis;
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
        if (isset($map['Apis'])) {
            $model->apis = $map['Apis'];
        }
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }
        if (isset($map['Events'])) {
            $model->events = $map['Events'];
        }
        if (isset($map['SignatureKey'])) {
            $model->signatureKey = $map['SignatureKey'];
        }
        if (isset($map['SignatureValue'])) {
            $model->signatureValue = $map['SignatureValue'];
        }
        if (isset($map['Spis'])) {
            $model->spis = $map['Spis'];
        }

        return $model;
    }
}
