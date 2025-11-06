<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeUpstreamBindingsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\ListExchangeUpstreamBindingsResponseBody\data\voList\bindingVO;

class voList extends Model
{
    /**
     * @var bindingVO[]
     */
    public $bindingVO;
    protected $_name = [
        'bindingVO' => 'BindingVO',
    ];

    public function validate()
    {
        if (\is_array($this->bindingVO)) {
            Model::validateArray($this->bindingVO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingVO) {
            if (\is_array($this->bindingVO)) {
                $res['BindingVO'] = [];
                $n1 = 0;
                foreach ($this->bindingVO as $item1) {
                    $res['BindingVO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BindingVO'])) {
            if (!empty($map['BindingVO'])) {
                $model->bindingVO = [];
                $n1 = 0;
                foreach ($map['BindingVO'] as $item1) {
                    $model->bindingVO[$n1] = bindingVO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
