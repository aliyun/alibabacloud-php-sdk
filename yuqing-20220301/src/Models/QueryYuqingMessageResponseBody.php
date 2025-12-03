<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Dara\Model;

class QueryYuqingMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var YuqingMessage[]
     */
    public $yuqingMessages;
    protected $_name = [
        'requestId' => 'requestId',
        'totalCount' => 'totalCount',
        'yuqingMessages' => 'yuqingMessages',
    ];

    public function validate()
    {
        if (\is_array($this->yuqingMessages)) {
            Model::validateArray($this->yuqingMessages);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        if (null !== $this->yuqingMessages) {
            if (\is_array($this->yuqingMessages)) {
                $res['yuqingMessages'] = [];
                $n1 = 0;
                foreach ($this->yuqingMessages as $item1) {
                    $res['yuqingMessages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        if (isset($map['yuqingMessages'])) {
            if (!empty($map['yuqingMessages'])) {
                $model->yuqingMessages = [];
                $n1 = 0;
                foreach ($map['yuqingMessages'] as $item1) {
                    $model->yuqingMessages[$n1] = YuqingMessage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
