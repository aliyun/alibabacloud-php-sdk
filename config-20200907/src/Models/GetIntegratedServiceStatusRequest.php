<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetIntegratedServiceStatusRequest extends Model
{
    /**
     * @description The identity of the cloud service that is integrated with Cloud Config. Valid values:
     *
     *   eventbridge: EventBridge
     *   cms: CloudMonitor
     *   bpstudio: Cloud Architect Design Tools (CADT)
     *
     * This parameter is required.
     * @example cadt
     *
     * @var string
     */
    public $serviceCode;
    protected $_name = [
        'serviceCode' => 'ServiceCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIntegratedServiceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }

        return $model;
    }
}
