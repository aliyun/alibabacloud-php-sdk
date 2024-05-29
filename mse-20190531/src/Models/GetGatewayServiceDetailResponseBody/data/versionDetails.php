<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data;

use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\versionDetails\serviceVersion;
use AlibabaCloud\Tea\Model;

class versionDetails extends Model
{
    /**
     * @description The number of instances.
     *
     * @example 1
     *
     * @var int
     */
    public $endpointNum;

    /**
     * @description The percentage of instances.
     *
     * @example 20%
     *
     * @var string
     */
    public $endpointNumPercent;

    /**
     * @description The service version.
     *
     * @var serviceVersion
     */
    public $serviceVersion;
    protected $_name = [
        'endpointNum'        => 'EndpointNum',
        'endpointNumPercent' => 'EndpointNumPercent',
        'serviceVersion'     => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointNum) {
            $res['EndpointNum'] = $this->endpointNum;
        }
        if (null !== $this->endpointNumPercent) {
            $res['EndpointNumPercent'] = $this->endpointNumPercent;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = null !== $this->serviceVersion ? $this->serviceVersion->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versionDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndpointNum'])) {
            $model->endpointNum = $map['EndpointNum'];
        }
        if (isset($map['EndpointNumPercent'])) {
            $model->endpointNumPercent = $map['EndpointNumPercent'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = serviceVersion::fromMap($map['ServiceVersion']);
        }

        return $model;
    }
}
