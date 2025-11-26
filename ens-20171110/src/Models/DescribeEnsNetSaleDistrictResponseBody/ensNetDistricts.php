<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponseBody\ensNetDistricts\ensNetDistrict;

class ensNetDistricts extends Model
{
    /**
     * @var ensNetDistrict[]
     */
    public $ensNetDistrict;
    protected $_name = [
        'ensNetDistrict' => 'EnsNetDistrict',
    ];

    public function validate()
    {
        if (\is_array($this->ensNetDistrict)) {
            Model::validateArray($this->ensNetDistrict);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensNetDistrict) {
            if (\is_array($this->ensNetDistrict)) {
                $res['EnsNetDistrict'] = [];
                $n1 = 0;
                foreach ($this->ensNetDistrict as $item1) {
                    $res['EnsNetDistrict'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EnsNetDistrict'])) {
            if (!empty($map['EnsNetDistrict'])) {
                $model->ensNetDistrict = [];
                $n1 = 0;
                foreach ($map['EnsNetDistrict'] as $item1) {
                    $model->ensNetDistrict[$n1] = ensNetDistrict::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
