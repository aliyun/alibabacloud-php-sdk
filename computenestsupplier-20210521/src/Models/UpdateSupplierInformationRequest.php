<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpdateSupplierInformationRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $operationIp;

    /**
     * @var bool
     */
    public $operationMfaPresent;
    protected $_name = [
        'regionId'            => 'RegionId',
        'operationIp'         => 'OperationIp',
        'operationMfaPresent' => 'OperationMfaPresent',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->operationIp) {
            $res['OperationIp'] = $this->operationIp;
        }
        if (null !== $this->operationMfaPresent) {
            $res['OperationMfaPresent'] = $this->operationMfaPresent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSupplierInformationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OperationIp'])) {
            $model->operationIp = $map['OperationIp'];
        }
        if (isset($map['OperationMfaPresent'])) {
            $model->operationMfaPresent = $map['OperationMfaPresent'];
        }

        return $model;
    }
}
