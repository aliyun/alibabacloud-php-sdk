<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\QueryReceiverByParamResponseBody\data\receiver;

class data extends Model
{
    /**
     * @var receiver[]
     */
    public $receiver;
    protected $_name = [
        'receiver' => 'receiver',
    ];

    public function validate()
    {
        if (\is_array($this->receiver)) {
            Model::validateArray($this->receiver);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->receiver) {
            if (\is_array($this->receiver)) {
                $res['receiver'] = [];
                $n1 = 0;
                foreach ($this->receiver as $item1) {
                    $res['receiver'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['receiver'])) {
            if (!empty($map['receiver'])) {
                $model->receiver = [];
                $n1 = 0;
                foreach ($map['receiver'] as $item1) {
                    $model->receiver[$n1] = receiver::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
