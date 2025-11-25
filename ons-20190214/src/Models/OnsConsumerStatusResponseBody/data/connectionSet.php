<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\connectionSet\connectionDo;

class connectionSet extends Model
{
    /**
     * @var connectionDo[]
     */
    public $connectionDo;
    protected $_name = [
        'connectionDo' => 'ConnectionDo',
    ];

    public function validate()
    {
        if (\is_array($this->connectionDo)) {
            Model::validateArray($this->connectionDo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionDo) {
            if (\is_array($this->connectionDo)) {
                $res['ConnectionDo'] = [];
                $n1 = 0;
                foreach ($this->connectionDo as $item1) {
                    $res['ConnectionDo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConnectionDo'])) {
            if (!empty($map['ConnectionDo'])) {
                $model->connectionDo = [];
                $n1 = 0;
                foreach ($map['ConnectionDo'] as $item1) {
                    $model->connectionDo[$n1] = connectionDo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
