<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\ListEventSubResponseBody\subscribers;

class ListEventSubResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var subscribers[]
     */
    public $subscribers;
    protected $_name = [
        'requestId' => 'RequestId',
        'subscribers' => 'Subscribers',
    ];

    public function validate()
    {
        if (\is_array($this->subscribers)) {
            Model::validateArray($this->subscribers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->subscribers) {
            if (\is_array($this->subscribers)) {
                $res['Subscribers'] = [];
                $n1 = 0;
                foreach ($this->subscribers as $item1) {
                    $res['Subscribers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Subscribers'])) {
            if (!empty($map['Subscribers'])) {
                $model->subscribers = [];
                $n1 = 0;
                foreach ($map['Subscribers'] as $item1) {
                    $model->subscribers[$n1] = subscribers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
