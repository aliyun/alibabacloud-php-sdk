<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qssj\V20220112\Models\GetAgeDistributionResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 26-30
     *
     * @var string
     */
    public $ageRange;

    /**
     * @example 10
     *
     * @var int
     */
    public $saleNumbers;

    /**
     * @example 10
     *
     * @var int
     */
    public $searchNumbers;
    protected $_name = [
        'ageRange'      => 'AgeRange',
        'saleNumbers'   => 'SaleNumbers',
        'searchNumbers' => 'SearchNumbers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ageRange) {
            $res['AgeRange'] = $this->ageRange;
        }
        if (null !== $this->saleNumbers) {
            $res['SaleNumbers'] = $this->saleNumbers;
        }
        if (null !== $this->searchNumbers) {
            $res['SearchNumbers'] = $this->searchNumbers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgeRange'])) {
            $model->ageRange = $map['AgeRange'];
        }
        if (isset($map['SaleNumbers'])) {
            $model->saleNumbers = $map['SaleNumbers'];
        }
        if (isset($map['SearchNumbers'])) {
            $model->searchNumbers = $map['SearchNumbers'];
        }

        return $model;
    }
}
