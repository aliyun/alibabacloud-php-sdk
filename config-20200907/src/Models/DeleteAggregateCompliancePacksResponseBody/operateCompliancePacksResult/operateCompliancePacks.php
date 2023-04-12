<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateCompliancePacksResponseBody\operateCompliancePacksResult;

use AlibabaCloud\Tea\Model;

class operateCompliancePacks extends Model
{
    /**
     * @description The ID of the compliance package.
     *
     * @example cp-541e626622af0087****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The error code.
     *
     *   If the compliance package is deleted, no error code is returned.
     *   If the compliance package fails to be deleted, an error code is returned. For more information about error codes, visit the [API Error Center](https://error-center.alibabacloud.com/status/product/Config).
     *
     * @example CompliancePackAlreadyPending
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description Indicates whether the operation is successful. Valid values:
     *
     *   true: The operation is successful.
     *   false: The operation fails.
     *
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'errorCode'        => 'ErrorCode',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operateCompliancePacks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
