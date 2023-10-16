<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class SbrainServiceHasRunningTaskBatchQueryRequest extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string[]
     */
    public $referenceNos;

    /**
     * @var string
     */
    public $referenceType;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $taskType;
    protected $_name = [
        'productCode'   => 'ProductCode',
        'referenceNos'  => 'ReferenceNos',
        'referenceType' => 'ReferenceType',
        'source'        => 'Source',
        'taskType'      => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->referenceNos) {
            $res['ReferenceNos'] = $this->referenceNos;
        }
        if (null !== $this->referenceType) {
            $res['ReferenceType'] = $this->referenceType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SbrainServiceHasRunningTaskBatchQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['ReferenceNos'])) {
            if (!empty($map['ReferenceNos'])) {
                $model->referenceNos = $map['ReferenceNos'];
            }
        }
        if (isset($map['ReferenceType'])) {
            $model->referenceType = $map['ReferenceType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
