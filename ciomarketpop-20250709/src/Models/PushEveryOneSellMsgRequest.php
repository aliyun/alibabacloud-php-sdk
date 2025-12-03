<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CioMarketPop\V20250709\Models;

use AlibabaCloud\Dara\Model;

class PushEveryOneSellMsgRequest extends Model
{
    /**
     * @var string[]
     */
    public $dingIdList;

    /**
     * @var string
     */
    public $pushMsg;

    /**
     * @var string
     */
    public $pushType;
    protected $_name = [
        'dingIdList' => 'DingIdList',
        'pushMsg' => 'PushMsg',
        'pushType' => 'PushType',
    ];

    public function validate()
    {
        if (\is_array($this->dingIdList)) {
            Model::validateArray($this->dingIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dingIdList) {
            if (\is_array($this->dingIdList)) {
                $res['DingIdList'] = [];
                $n1 = 0;
                foreach ($this->dingIdList as $item1) {
                    $res['DingIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DingIdList'])) {
                $model->dingIdList = [];
                $n1 = 0;
                foreach ($map['DingIdList'] as $item1) {
                    $model->dingIdList[$n1] = $item1;
                    ++$n1;
                }
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
