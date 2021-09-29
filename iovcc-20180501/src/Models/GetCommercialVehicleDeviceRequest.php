<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GetCommercialVehicleDeviceRequest extends Model
{
    /**
     * @description 项目ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $clientId;
    protected $_name = [
        'projectId' => 'ProjectId',
        'clientId'  => 'ClientId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCommercialVehicleDeviceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        return $model;
    }
}
