<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet\operationProgress\relatedItemSet;
use AlibabaCloud\Tea\Model;

class operationProgress extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMsg;

    /**
     * @var relatedItemSet
     */
    public $relatedItemSet;

    /**
     * @var string
     */
    public $operationStatus;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMsg'        => 'ErrorMsg',
        'relatedItemSet'  => 'RelatedItemSet',
        'operationStatus' => 'OperationStatus',
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
        if (null !== $this->relatedItemSet) {
            $res['RelatedItemSet'] = null !== $this->relatedItemSet ? $this->relatedItemSet->toMap() : null;
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
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
        if (isset($map['RelatedItemSet'])) {
            $model->relatedItemSet = relatedItemSet::fromMap($map['RelatedItemSet']);
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }

        return $model;
    }
}
