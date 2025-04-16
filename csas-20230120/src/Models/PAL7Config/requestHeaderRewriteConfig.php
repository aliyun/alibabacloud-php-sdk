<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\PAL7Config;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\PAL7ConfigRewriteOp;

class requestHeaderRewriteConfig extends Model
{
    /**
     * @var PAL7ConfigRewriteOp[]
     */
    public $ops;
    protected $_name = [
        'ops' => 'Ops',
    ];

    public function validate()
    {
        if (\is_array($this->ops)) {
            Model::validateArray($this->ops);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ops) {
            if (\is_array($this->ops)) {
                $res['Ops'] = [];
                $n1 = 0;
                foreach ($this->ops as $item1) {
                    $res['Ops'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Ops'])) {
            if (!empty($map['Ops'])) {
                $model->ops = [];
                $n1 = 0;
                foreach ($map['Ops'] as $item1) {
                    $model->ops[$n1++] = PAL7ConfigRewriteOp::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
