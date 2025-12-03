<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709\Models;

use AlibabaCloud\Dara\Model;

class PushEveryOneSellMsgShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dingIdListShrink;

    /**
     * @var string
     */
    public $pushMsg;

    /**
     * @var string
     */
    public $pushType;
    protected $_name = [
        'dingIdListShrink' => 'DingIdList',
        'pushMsg' => 'PushMsg',
        'pushType' => 'PushType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingIdListShrink) {
            $res['DingIdList'] = $this->dingIdListShrink;
        }

        if (null !== $this->pushMsg) {
            $res['PushMsg'] = $this->pushMsg;
        }

        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
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
        if (isset($map['DingIdList'])) {
            $model->dingIdListShrink = $map['DingIdList'];
        }

        if (isset($map['PushMsg'])) {
            $model->pushMsg = $map['PushMsg'];
        }

        if (isset($map['PushType'])) {
            $model->pushType = $map['PushType'];
        }

        return $model;
    }
}
