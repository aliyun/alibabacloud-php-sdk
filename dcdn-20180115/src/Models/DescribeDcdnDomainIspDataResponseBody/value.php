<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIspDataResponseBody\value\ispProportionData;

class value extends Model
{
    /**
     * @var ispProportionData[]
     */
    public $ispProportionData;
    protected $_name = [
        'ispProportionData' => 'IspProportionData',
    ];

    public function validate()
    {
        if (\is_array($this->ispProportionData)) {
            Model::validateArray($this->ispProportionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ispProportionData) {
            if (\is_array($this->ispProportionData)) {
                $res['IspProportionData'] = [];
                $n1 = 0;
                foreach ($this->ispProportionData as $item1) {
                    $res['IspProportionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['IspProportionData'])) {
            if (!empty($map['IspProportionData'])) {
                $model->ispProportionData = [];
                $n1 = 0;
                foreach ($map['IspProportionData'] as $item1) {
                    $model->ispProportionData[$n1] = ispProportionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
