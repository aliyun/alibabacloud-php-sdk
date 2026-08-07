<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigHistoryResponseBody\history;
use AlibabaCloud\SDK\Green\V20220926\Models\ListAppConfigHistoryResponseBody\publish;

class ListAppConfigHistoryResponseBody extends Model
{
    /**
     * @var history[]
     */
    public $history;

    /**
     * @var publish[]
     */
    public $publish;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'history' => 'History',
        'publish' => 'Publish',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        if (\is_array($this->publish)) {
            Model::validateArray($this->publish);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['History'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['History'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->publish) {
            if (\is_array($this->publish)) {
                $res['Publish'] = [];
                $n1 = 0;
                foreach ($this->publish as $item1) {
                    $res['Publish'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['History'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Publish'])) {
            if (!empty($map['Publish'])) {
                $model->publish = [];
                $n1 = 0;
                foreach ($map['Publish'] as $item1) {
                    $model->publish[$n1] = publish::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
