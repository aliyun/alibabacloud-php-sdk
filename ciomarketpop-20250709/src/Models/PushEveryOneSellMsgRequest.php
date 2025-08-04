<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709\Models;

use AlibabaCloud\Tea\Model;

class PushEveryOneSellMsgRequest extends Model
{
    /**
     * @example ["1234567"]
     *
     * @var string[]
     */
    public $dingIdList;

    /**
     * @example 推送内容
     *
     * @var string
     */
    public $pushMsg;

    /**
     * @example 1
     *
     * @var string
     */
    public $pushType;
    protected $_name = [
        'dingIdList' => 'DingIdList',
        'pushMsg' => 'PushMsg',
        'pushType' => 'PushType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dingIdList) {
            $res['DingIdList'] = $this->dingIdList;
        }
        if (null !== $this->pushMsg) {
            $res['PushMsg'] = $this->pushMsg;
        }
        if (null !== $this->pushType) {
            $res['PushType'] = $this->pushType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushEveryOneSellMsgRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DingIdList'])) {
            if (!empty($map['DingIdList'])) {
                $model->dingIdList = $map['DingIdList'];
            }
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
