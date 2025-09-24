<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data;

use AlibabaCloud\Dara\Model;

class redeem extends Model
{
    /**
     * @var redeem\redeem[]
     */
    public $redeem;
    protected $_name = [
        'redeem' => 'Redeem',
    ];

    public function validate()
    {
        if (\is_array($this->redeem)) {
            Model::validateArray($this->redeem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->redeem) {
            if (\is_array($this->redeem)) {
                $res['Redeem'] = [];
                $n1 = 0;
                foreach ($this->redeem as $item1) {
                    $res['Redeem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Redeem'])) {
            if (!empty($map['Redeem'])) {
                $model->redeem = [];
                $n1 = 0;
                foreach ($map['Redeem'] as $item1) {
                    $model->redeem[$n1] = redeem\redeem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
