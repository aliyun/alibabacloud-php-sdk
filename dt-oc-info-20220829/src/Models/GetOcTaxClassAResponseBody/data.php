<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dtocinfo\V20220829\Models\GetOcTaxClassAResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $entName;

    /**
     * @example A
     *
     * @var string
     */
    public $taxLevel;

    /**
     * @example 911101073272861276
     *
     * @var string
     */
    public $taxpayerNum;

    /**
     * @example 2018
     *
     * @var string
     */
    public $year;
    protected $_name = [
        'entName'     => 'EntName',
        'taxLevel'    => 'TaxLevel',
        'taxpayerNum' => 'TaxpayerNum',
        'year'        => 'Year',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entName) {
            $res['EntName'] = $this->entName;
        }
        if (null !== $this->taxLevel) {
            $res['TaxLevel'] = $this->taxLevel;
        }
        if (null !== $this->taxpayerNum) {
            $res['TaxpayerNum'] = $this->taxpayerNum;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
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
        if (isset($map['EntName'])) {
            $model->entName = $map['EntName'];
        }
        if (isset($map['TaxLevel'])) {
            $model->taxLevel = $map['TaxLevel'];
        }
        if (isset($map['TaxpayerNum'])) {
            $model->taxpayerNum = $map['TaxpayerNum'];
        }
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
