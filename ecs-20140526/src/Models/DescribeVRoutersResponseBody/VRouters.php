<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeVRoutersResponseBody\VRouters\VRouter;

class VRouters extends Model
{
    /**
     * @var VRouter[]
     */
    public $VRouter;
    protected $_name = [
        'VRouter' => 'VRouter',
    ];

    public function validate()
    {
        if (\is_array($this->VRouter)) {
            Model::validateArray($this->VRouter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->VRouter) {
            if (\is_array($this->VRouter)) {
                $res['VRouter'] = [];
                $n1 = 0;
                foreach ($this->VRouter as $item1) {
                    $res['VRouter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['VRouter'])) {
            if (!empty($map['VRouter'])) {
                $model->VRouter = [];
                $n1 = 0;
                foreach ($map['VRouter'] as $item1) {
                    $model->VRouter[$n1] = VRouter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
