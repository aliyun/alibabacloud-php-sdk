<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->optionId) {
            $res['OptionId'] = $this->optionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return optionIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OptionId'])) {
            if (!empty($map['OptionId'])) {
                $model->optionId = $map['OptionId'];
            }
        }

        return $model;
    }
}
