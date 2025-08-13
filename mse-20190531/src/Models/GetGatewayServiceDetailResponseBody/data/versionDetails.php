<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayServiceDetailResponseBody\data\versionDetails\serviceVersion;

class versionDetails extends Model
{
    /**
     * @var int
     */
    public $endpointNum;

    /**
     * @var string
     */
    public $endpointNumPercent;

    /**
     * @var serviceVersion
     */
    public $serviceVersion;
    protected $_name = [
        'endpointNum' => 'EndpointNum',
        'endpointNumPercent' => 'EndpointNumPercent',
        'serviceVersion' => 'ServiceVersion',
    ];

    public function validate()
    {
        if (null !== $this->serviceVersion) {
            $this->serviceVersion->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointNum) {
            $res['EndpointNum'] = $this->endpointNum;
        }

        if (null !== $this->endpointNumPercent) {
            $res['EndpointNumPercent'] = $this->endpointNumPercent;
        }

        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = null !== $this->serviceVersion ? $this->serviceVersion->toArray($noStream) : $this->serviceVersion;
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
