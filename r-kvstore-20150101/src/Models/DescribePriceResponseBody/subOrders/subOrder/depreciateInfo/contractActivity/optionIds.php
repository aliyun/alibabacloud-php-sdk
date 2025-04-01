<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity;

use AlibabaCloud\Dara\Model;

class optionIds extends Model
{
    /**
     * @var int[]
     */
    public $optionId;
    protected $_name = [
        'optionId' => 'OptionId',
    ];

    public function validate()
    {
        if (\is_array($this->optionId)) {
            Model::validateArray($this->optionId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionId) {
            if (\is_array($this->optionId)) {
                $res['OptionId'] = [];
                $n1 = 0;
                foreach ($this->optionId as $item1) {
                    $res['OptionId'][$n1++] = $item1;
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
        if (isset($map['OptionId'])) {
            if (!empty($map['OptionId'])) {
                $model->optionId = [];
                $n1 = 0;
                foreach ($map['OptionId'] as $item1) {
                    $model->optionId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
