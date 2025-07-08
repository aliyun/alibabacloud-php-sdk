<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDailyBillInfoLeafNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDailyBillInfoLeafNewResponseBody\list_\dailyBillDetailInfoDTO;

class list_ extends Model
{
    /**
     * @var dailyBillDetailInfoDTO[]
     */
    public $dailyBillDetailInfoDTO;
    protected $_name = [
        'dailyBillDetailInfoDTO' => 'DailyBillDetailInfoDTO',
    ];

    public function validate()
    {
        if (\is_array($this->dailyBillDetailInfoDTO)) {
            Model::validateArray($this->dailyBillDetailInfoDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dailyBillDetailInfoDTO) {
            if (\is_array($this->dailyBillDetailInfoDTO)) {
                $res['DailyBillDetailInfoDTO'] = [];
                $n1 = 0;
                foreach ($this->dailyBillDetailInfoDTO as $item1) {
                    $res['DailyBillDetailInfoDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DailyBillDetailInfoDTO'])) {
            if (!empty($map['DailyBillDetailInfoDTO'])) {
                $model->dailyBillDetailInfoDTO = [];
                $n1 = 0;
                foreach ($map['DailyBillDetailInfoDTO'] as $item1) {
                    $model->dailyBillDetailInfoDTO[$n1] = dailyBillDetailInfoDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
