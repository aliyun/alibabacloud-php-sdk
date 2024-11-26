<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yuqing\V20220301\Models;

use AlibabaCloud\Tea\Model;

class QueryYuqingMessageResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example adacae47-6fc0-45c6-897c-26201aefbdfd
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 20
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var YuqingMessage[]
     */
    public $yuqingMessages;
    protected $_name = [
        'requestId'      => 'requestId',
        'totalCount'     => 'totalCount',
        'yuqingMessages' => 'yuqingMessages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }
        if (null !== $this->yuqingMessages) {
            $res['yuqingMessages'] = [];
            if (null !== $this->yuqingMessages && \is_array($this->yuqingMessages)) {
                $n = 0;
                foreach ($this->yuqingMessages as $item) {
                    $res['yuqingMessages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryYuqingMessageResponseBody
     */
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
                $n                     = 0;
                foreach ($map['yuqingMessages'] as $item) {
                    $model->yuqingMessages[$n++] = null !== $item ? YuqingMessage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
