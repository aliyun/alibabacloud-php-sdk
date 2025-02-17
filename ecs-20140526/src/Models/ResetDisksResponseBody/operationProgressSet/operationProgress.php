<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\ResetDisksResponseBody\operationProgressSet\operationProgress\relatedItemSet;

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
     * @var string
     */
    public $operationStatus;
    /**
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
        if (null !== $this->relatedItemSet) {
            $this->relatedItemSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RelatedItemSet'] = null !== $this->relatedItemSet ? $this->relatedItemSet->toArray($noStream) : $this->relatedItemSet;
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
