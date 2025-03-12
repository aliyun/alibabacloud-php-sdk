<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody\operationProgressSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody\operationProgressSet\operationProgress\relatedItemSet;
use AlibabaCloud\Tea\Model;

class operationProgress extends Model
{
    /**
     * @description The error code.
     *
     * @example ParameterInvalid
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message.
     *
     * @example The specified RegionId parameter is invalid.
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @description The status of the operation.
     *
     * @example Success
     *
     * @var string
     */
    public $operationStatus;

    /**
     * @description An array consisting of RelatedItem data.
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
