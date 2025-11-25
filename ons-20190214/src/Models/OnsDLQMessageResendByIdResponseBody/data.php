<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsDLQMessageResendByIdResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $msgId;
    protected $_name = [
        'msgId' => 'MsgId',
    ];

    public function validate()
    {
        if (\is_array($this->msgId)) {
            Model::validateArray($this->msgId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->msgId) {
            if (\is_array($this->msgId)) {
                $res['MsgId'] = [];
                $n1 = 0;
                foreach ($this->msgId as $item1) {
                    $res['MsgId'][$n1] = $item1;
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
        if (isset($map['MsgId'])) {
            if (!empty($map['MsgId'])) {
                $model->msgId = [];
                $n1 = 0;
                foreach ($map['MsgId'] as $item1) {
                    $model->msgId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
