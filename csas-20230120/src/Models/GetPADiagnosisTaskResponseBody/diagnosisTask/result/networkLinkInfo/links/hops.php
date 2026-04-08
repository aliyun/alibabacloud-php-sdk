<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\links;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\links\hops\geoData;

class hops extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var geoData
     */
    public $geoData;

    /**
     * @var string
     */
    public $latency;

    /**
     * @var string
     */
    public $TTL;
    protected $_name = [
        'address' => 'Address',
        'geoData' => 'GeoData',
        'latency' => 'Latency',
        'TTL' => 'TTL',
    ];

    public function validate()
    {
        if (null !== $this->geoData) {
            $this->geoData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->geoData) {
            $res['GeoData'] = null !== $this->geoData ? $this->geoData->toArray($noStream) : $this->geoData;
        }

        if (null !== $this->latency) {
            $res['Latency'] = $this->latency;
        }

        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['GeoData'])) {
            $model->geoData = geoData::fromMap($map['GeoData']);
        }

        if (isset($map['Latency'])) {
            $model->latency = $map['Latency'];
        }

        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }

        return $model;
    }
}
