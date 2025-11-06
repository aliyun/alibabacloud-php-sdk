<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingErrorByTaskIdResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetBindingErrorByTaskIdResponseBody\data\voList\bindingErrorDO;

class voList extends Model
{
    /**
     * @var bindingErrorDO[]
     */
    public $bindingErrorDO;
    protected $_name = [
        'bindingErrorDO' => 'BindingErrorDO',
    ];

    public function validate()
    {
        if (\is_array($this->bindingErrorDO)) {
            Model::validateArray($this->bindingErrorDO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bindingErrorDO) {
            if (\is_array($this->bindingErrorDO)) {
                $res['BindingErrorDO'] = [];
                $n1 = 0;
                foreach ($this->bindingErrorDO as $item1) {
                    $res['BindingErrorDO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BindingErrorDO'])) {
            if (!empty($map['BindingErrorDO'])) {
                $model->bindingErrorDO = [];
                $n1 = 0;
                foreach ($map['BindingErrorDO'] as $item1) {
                    $model->bindingErrorDO[$n1] = bindingErrorDO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
