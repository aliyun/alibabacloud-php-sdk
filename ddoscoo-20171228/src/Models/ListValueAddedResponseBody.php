<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\ListValueAddedResponseBody\valueAddedList;

class ListValueAddedResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var valueAddedList[]
     */
    public $valueAddedList;
    protected $_name = [
        'requestId' => 'RequestId',
        'valueAddedList' => 'ValueAddedList',
    ];

    public function validate()
    {
        if (\is_array($this->valueAddedList)) {
            Model::validateArray($this->valueAddedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->valueAddedList) {
            if (\is_array($this->valueAddedList)) {
                $res['ValueAddedList'] = [];
                $n1 = 0;
                foreach ($this->valueAddedList as $item1) {
                    $res['ValueAddedList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['ValueAddedList'])) {
            if (!empty($map['ValueAddedList'])) {
                $model->valueAddedList = [];
                $n1 = 0;
                foreach ($map['ValueAddedList'] as $item1) {
                    $model->valueAddedList[$n1++] = valueAddedList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
