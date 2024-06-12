<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class UpdateIntegratedServiceStatusRequest extends Model
{
    /**
     * @description The types of the integrated events. Separate multiple event types with commas (,). Valid values:
     *
     *   ConfigurationItemChangeNotification: resource change event
     *   NonCompliantNotification: non-compliance event
     *
     * @example NonCompliantNotification
     *
     * @var string
     */
    public $integratedTypes;

    /**
     * @description The product code of the cloud product. Valid values:
     *
     *   cadt: Cloud Architecture Design Tool
     *
     * This parameter is required.
     * @example cadt
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @description Specifies whether you want the product to be integrated. Valid values:
     *
     *   true
     *   false
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $status;
    protected $_name = [
        'integratedTypes' => 'IntegratedTypes',
        'serviceCode'     => 'ServiceCode',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->integratedTypes) {
            $res['IntegratedTypes'] = $this->integratedTypes;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIntegratedServiceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntegratedTypes'])) {
            $model->integratedTypes = $map['IntegratedTypes'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
