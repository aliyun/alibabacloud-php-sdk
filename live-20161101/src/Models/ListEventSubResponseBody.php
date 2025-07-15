<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubResponseBody\subscribers;
use AlibabaCloud\Tea\Model;

class ListEventSubResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example AE050E24-BE9B-1E79-BB30-7EA0BBAE7F08
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The events.
     *
     * @var subscribers[]
     */
    public $subscribers;
    protected $_name = [
        'requestId' => 'RequestId',
        'subscribers' => 'Subscribers',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subscribers) {
            $res['Subscribers'] = [];
            if (null !== $this->subscribers && \is_array($this->subscribers)) {
                $n = 0;
                foreach ($this->subscribers as $item) {
                    $res['Subscribers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEventSubResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Subscribers'])) {
            if (!empty($map['Subscribers'])) {
                $model->subscribers = [];
                $n = 0;
                foreach ($map['Subscribers'] as $item) {
                    $model->subscribers[$n++] = null !== $item ? subscribers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
