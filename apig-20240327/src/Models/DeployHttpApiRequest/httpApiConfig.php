<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;

use AlibabaCloud\Tea\Model;

class httpApiConfig extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string[]
     */
    public $routeIds;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'routeIds' => 'routeIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->routeIds) {
            $res['routeIds'] = $this->routeIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return httpApiConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['routeIds'])) {
            if (!empty($map['routeIds'])) {
                $model->routeIds = $map['routeIds'];
            }
        }

        return $model;
    }
}
