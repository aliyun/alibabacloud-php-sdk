<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRetailVision\V20260506\Models;

use AlibabaCloud\Dara\Model;

class RecognizeOrderRequest extends Model
{
    /**
     * @var string
     */
    public $callbackUrl;

    /**
     * @var string[]
     */
    public $candidateItems;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $orderUniqueId;

    /**
     * @var string[]
     */
    public $videoUrls;
    protected $_name = [
        'callbackUrl' => 'CallbackUrl',
        'candidateItems' => 'CandidateItems',
        'deviceId' => 'DeviceId',
        'orderUniqueId' => 'OrderUniqueId',
        'videoUrls' => 'VideoUrls',
    ];

    public function validate()
    {
        if (\is_array($this->candidateItems)) {
            Model::validateArray($this->candidateItems);
        }
        if (\is_array($this->videoUrls)) {
            Model::validateArray($this->videoUrls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callbackUrl) {
            $res['CallbackUrl'] = $this->callbackUrl;
        }

        if (null !== $this->candidateItems) {
            if (\is_array($this->candidateItems)) {
                $res['CandidateItems'] = [];
                $n1 = 0;
                foreach ($this->candidateItems as $item1) {
                    $res['CandidateItems'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }

        if (null !== $this->orderUniqueId) {
            $res['OrderUniqueId'] = $this->orderUniqueId;
        }

        if (null !== $this->videoUrls) {
            if (\is_array($this->videoUrls)) {
                $res['VideoUrls'] = [];
                $n1 = 0;
                foreach ($this->videoUrls as $item1) {
                    $res['VideoUrls'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['CandidateItems'])) {
                $model->candidateItems = [];
                $n1 = 0;
                foreach ($map['CandidateItems'] as $item1) {
                    $model->candidateItems[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }

        if (isset($map['OrderUniqueId'])) {
            $model->orderUniqueId = $map['OrderUniqueId'];
        }

        if (isset($map['VideoUrls'])) {
            if (!empty($map['VideoUrls'])) {
                $model->videoUrls = [];
                $n1 = 0;
                foreach ($map['VideoUrls'] as $item1) {
                    $model->videoUrls[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
