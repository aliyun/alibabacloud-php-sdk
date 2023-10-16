<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentionOrderGeneratingPayRequest extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $paymentCallback;
    protected $_name = [
        'channel'         => 'Channel',
        'intentionBizId'  => 'IntentionBizId',
        'paymentCallback' => 'PaymentCallback',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->paymentCallback) {
            $res['PaymentCallback'] = $this->paymentCallback;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntentionOrderGeneratingPayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['PaymentCallback'])) {
            $model->paymentCallback = $map['PaymentCallback'];
        }

        return $model;
    }
}
