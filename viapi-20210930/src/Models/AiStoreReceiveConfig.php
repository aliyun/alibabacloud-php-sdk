<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20210930\Models;

use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\dingTalk;
use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\eventBridge;
use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\http;
use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\https;
use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\mns;
use AlibabaCloud\SDK\Viapi\V20210930\Models\AiStoreReceiveConfig\rocketMQ;
use AlibabaCloud\Tea\Model;

class AiStoreReceiveConfig extends Model
{
    /**
     * @var string
     */
    public $custom;

    /**
     * @var dingTalk
     */
    public $dingTalk;

    /**
     * @var eventBridge
     */
    public $eventBridge;

    /**
     * @var http
     */
    public $http;

    /**
     * @var https
     */
    public $https;

    /**
     * @var mns
     */
    public $mns;

    /**
     * @var rocketMQ
     */
    public $rocketMQ;
    protected $_name = [
        'custom'      => 'Custom',
        'dingTalk'    => 'DingTalk',
        'eventBridge' => 'EventBridge',
        'http'        => 'Http',
        'https'       => 'Https',
        'mns'         => 'Mns',
        'rocketMQ'    => 'RocketMQ',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custom) {
            $res['Custom'] = $this->custom;
        }
        if (null !== $this->dingTalk) {
            $res['DingTalk'] = null !== $this->dingTalk ? $this->dingTalk->toMap() : null;
        }
        if (null !== $this->eventBridge) {
            $res['EventBridge'] = null !== $this->eventBridge ? $this->eventBridge->toMap() : null;
        }
        if (null !== $this->http) {
            $res['Http'] = null !== $this->http ? $this->http->toMap() : null;
        }
        if (null !== $this->https) {
            $res['Https'] = null !== $this->https ? $this->https->toMap() : null;
        }
        if (null !== $this->mns) {
            $res['Mns'] = null !== $this->mns ? $this->mns->toMap() : null;
        }
        if (null !== $this->rocketMQ) {
            $res['RocketMQ'] = null !== $this->rocketMQ ? $this->rocketMQ->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AiStoreReceiveConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Custom'])) {
            $model->custom = $map['Custom'];
        }
        if (isset($map['DingTalk'])) {
            $model->dingTalk = dingTalk::fromMap($map['DingTalk']);
        }
        if (isset($map['EventBridge'])) {
            $model->eventBridge = eventBridge::fromMap($map['EventBridge']);
        }
        if (isset($map['Http'])) {
            $model->http = http::fromMap($map['Http']);
        }
        if (isset($map['Https'])) {
            $model->https = https::fromMap($map['Https']);
        }
        if (isset($map['Mns'])) {
            $model->mns = mns::fromMap($map['Mns']);
        }
        if (isset($map['RocketMQ'])) {
            $model->rocketMQ = rocketMQ::fromMap($map['RocketMQ']);
        }

        return $model;
    }
}
