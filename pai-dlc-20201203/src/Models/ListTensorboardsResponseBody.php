<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class ListTensorboardsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var Tensorboard[]
     */
    public $tensorboards;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'tensorboards' => 'Tensorboards',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->tensorboards)) {
            Model::validateArray($this->tensorboards);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tensorboards) {
            if (\is_array($this->tensorboards)) {
                $res['Tensorboards'] = [];
                $n1 = 0;
                foreach ($this->tensorboards as $item1) {
                    $res['Tensorboards'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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

        if (isset($map['Tensorboards'])) {
            if (!empty($map['Tensorboards'])) {
                $model->tensorboards = [];
                $n1 = 0;
                foreach ($map['Tensorboards'] as $item1) {
                    $model->tensorboards[$n1] = Tensorboard::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
