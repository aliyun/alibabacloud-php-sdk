<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTaskAttributeResponseBody\operationProgressSet\relatedItemSet;
use AlibabaCloud\Tea\Model;

class operationProgressSet extends Model
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
     * @var relatedItemSet[]
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
            $res['RelatedItemSet'] = [];
            if (null !== $this->relatedItemSet && \is_array($this->relatedItemSet)) {
                $n = 0;
                foreach ($this->relatedItemSet as $item) {
                    $res['RelatedItemSet'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->operationStatus) {
            $res['OperationStatus'] = $this->operationStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return operationProgressSet
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
            if (!empty($map['RelatedItemSet'])) {
                $model->relatedItemSet = [];
                $n                     = 0;
                foreach ($map['RelatedItemSet'] as $item) {
                    $model->relatedItemSet[$n++] = null !== $item ? relatedItemSet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OperationStatus'])) {
            $model->operationStatus = $map['OperationStatus'];
        }

        return $model;
    }
}
