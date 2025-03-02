<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20230101\Models\DescribeNumberMccMncResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $countryIso3;
    /**
     * @var string
     */
    public $mcc;
    /**
     * @var string
     */
    public $mnc;
    /**
     * @var bool
     */
    public $ported;
    protected $_name = [
        'countryIso3' => 'CountryIso3',
        'mcc'         => 'Mcc',
        'mnc'         => 'Mnc',
        'ported'      => 'Ported',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countryIso3) {
            $res['CountryIso3'] = $this->countryIso3;
        }

        if (null !== $this->mcc) {
            $res['Mcc'] = $this->mcc;
        }

        if (null !== $this->mnc) {
            $res['Mnc'] = $this->mnc;
        }

        if (null !== $this->ported) {
            $res['Ported'] = $this->ported;
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
        if (isset($map['CountryIso3'])) {
            $model->countryIso3 = $map['CountryIso3'];
        }

        if (isset($map['Mcc'])) {
            $model->mcc = $map['Mcc'];
        }

        if (isset($map['Mnc'])) {
            $model->mnc = $map['Mnc'];
        }

        if (isset($map['Ported'])) {
            $model->ported = $map['Ported'];
        }

        return $model;
    }
}
