<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainHttpCodeDataResponseBody\httpCodeData\usageData;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DescribeVodDomainHttpCodeDataResponseBody\httpCodeData\usageData\value\codeProportionData;

class value extends Model
{
    /**
     * @var codeProportionData[]
     */
    public $codeProportionData;
    protected $_name = [
        'codeProportionData' => 'CodeProportionData',
    ];

    public function validate()
    {
        if (\is_array($this->codeProportionData)) {
            Model::validateArray($this->codeProportionData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->codeProportionData) {
            if (\is_array($this->codeProportionData)) {
                $res['CodeProportionData'] = [];
                $n1 = 0;
                foreach ($this->codeProportionData as $item1) {
                    $res['CodeProportionData'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CodeProportionData'])) {
            if (!empty($map['CodeProportionData'])) {
                $model->codeProportionData = [];
                $n1 = 0;
                foreach ($map['CodeProportionData'] as $item1) {
                    $model->codeProportionData[$n1] = codeProportionData::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
