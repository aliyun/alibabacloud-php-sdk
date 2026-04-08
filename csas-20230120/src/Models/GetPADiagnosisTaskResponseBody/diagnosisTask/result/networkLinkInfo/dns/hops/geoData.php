<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\dns\hops;

use AlibabaCloud\Dara\Model;

class geoData extends Model
{
    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $prov;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $isp;
    protected $_name = [
        'country' => 'Country',
        'prov' => 'Prov',
        'city' => 'City',
        'isp' => 'Isp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->prov) {
            $res['Prov'] = $this->prov;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
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
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['Prov'])) {
            $model->prov = $map['Prov'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }

        return $model;
    }
}
