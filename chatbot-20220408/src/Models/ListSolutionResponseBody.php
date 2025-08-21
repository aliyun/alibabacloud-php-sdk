<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\ListSolutionResponseBody\solutions;

class ListSolutionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var solutions[]
     */
    public $solutions;
    protected $_name = [
        'requestId' => 'RequestId',
        'solutions' => 'Solutions',
    ];

    public function validate()
    {
        if (\is_array($this->solutions)) {
            Model::validateArray($this->solutions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->solutions) {
            if (\is_array($this->solutions)) {
                $res['Solutions'] = [];
                $n1 = 0;
                foreach ($this->solutions as $item1) {
                    $res['Solutions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['Solutions'])) {
            if (!empty($map['Solutions'])) {
                $model->solutions = [];
                $n1 = 0;
                foreach ($map['Solutions'] as $item1) {
                    $model->solutions[$n1] = solutions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
