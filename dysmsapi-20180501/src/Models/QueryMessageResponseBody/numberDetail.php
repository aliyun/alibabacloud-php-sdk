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
    public $country;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'carrier' => 'Carrier',
        'country' => 'Country',
        'region'  => 'Region',
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
        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
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
        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
