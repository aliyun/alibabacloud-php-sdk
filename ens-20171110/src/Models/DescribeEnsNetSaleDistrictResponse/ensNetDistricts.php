<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponse;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsNetSaleDistrictResponse\ensNetDistricts\ensNetDistrict;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('ensNetDistrict', $this->ensNetDistrict, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensNetDistrict) {
            $res['EnsNetDistrict'] = [];
            if (null !== $this->ensNetDistrict && \is_array($this->ensNetDistrict)) {
                $n = 0;
                foreach ($this->ensNetDistrict as $item) {
                    $res['EnsNetDistrict'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ensNetDistricts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsNetDistrict'])) {
            if (!empty($map['EnsNetDistrict'])) {
                $model->ensNetDistrict = [];
                $n                     = 0;
                foreach ($map['EnsNetDistrict'] as $item) {
                    $model->ensNetDistrict[$n++] = null !== $item ? ensNetDistrict::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
