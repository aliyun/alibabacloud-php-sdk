<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class RecognizeOrderShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string
     */
    public $candidateItemsShrink;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $orderUniqueId;

    /**
     * @var string
     */
    public $videoUrlsShrink;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'candidateItemsShrink' => 'CandidateItems',
        'deviceId' => 'DeviceId',
        'orderUniqueId' => 'OrderUniqueId',
        'videoUrlsShrink' => 'VideoUrls',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->candidateItemsShrink) {
            $res['CandidateItems'] = $this->candidateItemsShrink;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->orderUniqueId) {
            $res['OrderUniqueId'] = $this->orderUniqueId;
        }

        if (null !== $this->videoUrlsShrink) {
            $res['VideoUrls'] = $this->videoUrlsShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallbackUrl'])) {
            $model->callbackUrl = $map['CallbackUrl'];
        }

        if (isset($map['CandidateItems'])) {
            $model->candidateItemsShrink = $map['CandidateItems'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['OrderUniqueId'])) {
            $model->orderUniqueId = $map['OrderUniqueId'];
        }

        if (isset($map['VideoUrls'])) {
            $model->videoUrlsShrink = $map['VideoUrls'];
        }

        return $model;
    }
}
