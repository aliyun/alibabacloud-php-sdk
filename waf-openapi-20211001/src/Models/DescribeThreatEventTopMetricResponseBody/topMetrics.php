<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeThreatEventTopMetricResponseBody;

use AlibabaCloud\Dara\Model;

class topMetrics extends Model
{
    /**
     * @var int
     */
    public $cnt;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'cnt' => 'Cnt',
        'country' => 'Country',
        'region' => 'Region',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cnt) {
            $res['Cnt'] = $this->cnt;
        }

        if (null !== $this->country) {
            $res['Country'] = $this->country;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Cnt'])) {
            $model->cnt = $map['Cnt'];
        }

        if (isset($map['Country'])) {
            $model->country = $map['Country'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
