<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\moduleAttrs\moduleAttr;

class moduleAttrs extends Model
{
    /**
     * @var moduleAttr[]
     */
    public $moduleAttr;
    protected $_name = [
        'moduleAttr' => 'moduleAttr',
    ];

    public function validate()
    {
        if (\is_array($this->moduleAttr)) {
            Model::validateArray($this->moduleAttr);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleAttr) {
            if (\is_array($this->moduleAttr)) {
                $res['moduleAttr'] = [];
                $n1 = 0;
                foreach ($this->moduleAttr as $item1) {
                    $res['moduleAttr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['moduleAttr'])) {
            if (!empty($map['moduleAttr'])) {
                $model->moduleAttr = [];
                $n1 = 0;
                foreach ($map['moduleAttr'] as $item1) {
                    $model->moduleAttr[$n1] = moduleAttr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
