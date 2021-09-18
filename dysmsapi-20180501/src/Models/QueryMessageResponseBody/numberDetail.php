<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20180501\Models\QueryMessageResponseBody;

use AlibabaCloud\Tea\Model;

class numberDetail extends Model
{
    /**
     * @var string
     */
    public $carrier;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $country;
    protected $_name = [
        'carrier' => 'Carrier',
        'region'  => 'Region',
        'country' => 'Country',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->carrier) {
            $res['Carrier'] = $this->carrier;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return numberDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Carrier'])) {
            $model->carrier = $map['Carrier'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        return $model;
    }
}
