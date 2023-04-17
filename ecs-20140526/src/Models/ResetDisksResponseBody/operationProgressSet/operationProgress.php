<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet\operationProgress\relatedItemSet;
use AlibabaCloud\Tea\Model;

class operationProgress extends Model
{
    /**
     * @description The error code that is returned if the request failed. This parameter is empty if the operation is successful.
     *
     * For information about error codes and error messages, see [Service error codes](https://error-center.alibabacloud.com/status/product/Ecs).
     * @example 400
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message that is returned if the request failed. This parameter is empty if the operation is successful.
     *
     * For information about error codes and error messages, see [Service error codes](https://error-center.alibabacloud.com/status/product/Ecs).
     * @example testErrorMsg
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description Indicates whether the operation is successful. If the operation is successful, Success is returned. If the operation failed, an error code and an error message are returned.
     *
     * @example Success
     *
     * @var string
     */
    public $operationStatus;

    /**
     * @description The information about the resources.
     *
     * @var relatedItemSet
     */
    public $relatedItemSet;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMsg'        => 'ErrorMsg',
        'operationStatus' => 'OperationStatus',
        'relatedItemSet'  => 'RelatedItemSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }
        if (null !== $this->relatedItemSet) {
            $res['RelatedItemSet'] = null !== $this->relatedItemSet ? $this->relatedItemSet->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationProgress
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }
        if (isset($map['RelatedItemSet'])) {
            $model->relatedItemSet = relatedItemSet::fromMap($map['RelatedItemSet']);
        }

        return $model;
    }
}
