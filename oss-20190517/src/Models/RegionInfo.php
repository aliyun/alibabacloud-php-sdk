<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class RegionInfo extends Model
{
    /**
     * @description accelerate endpoint
     *
     * @var string
     */
    public $accelerateEndpoint;

    /**
     * @description internal endpoint
     *
     * @var string
     */
    public $internalEndpoint;

    /**
     * @description internet endpoint
     *
     * @var string
     */
    public $internetEndpoint;

    /**
     * @description region
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'accelerateEndpoint' => 'AccelerateEndpoint',
        'internalEndpoint'   => 'InternalEndpoint',
        'internetEndpoint'   => 'InternetEndpoint',
        'region'             => 'Region',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateEndpoint) {
            $res['AccelerateEndpoint'] = $this->accelerateEndpoint;
        }
        if (null !== $this->internalEndpoint) {
            $res['InternalEndpoint'] = $this->internalEndpoint;
        }
        if (null !== $this->internetEndpoint) {
            $res['InternetEndpoint'] = $this->internetEndpoint;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateEndpoint'])) {
            $model->accelerateEndpoint = $map['AccelerateEndpoint'];
        }
        if (isset($map['InternalEndpoint'])) {
            $model->internalEndpoint = $map['InternalEndpoint'];
        }
        if (isset($map['InternetEndpoint'])) {
            $model->internetEndpoint = $map['InternetEndpoint'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
