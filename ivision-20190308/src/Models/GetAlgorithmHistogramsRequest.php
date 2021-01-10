<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivision\V20190308\Models;

use AlibabaCloud\Tea\Model;

class GetAlgorithmHistogramsRequest extends Model
{
    /**
     * @var string
     */
    public $algorithmCode;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $aggregateType;
    protected $_name = [
        'algorithmCode' => 'AlgorithmCode',
        'startDate'     => 'StartDate',
        'endDate'       => 'EndDate',
        'aggregateType' => 'AggregateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algorithmCode) {
            $res['AlgorithmCode'] = $this->algorithmCode;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->aggregateType) {
            $res['AggregateType'] = $this->aggregateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAlgorithmHistogramsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgorithmCode'])) {
            $model->algorithmCode = $map['AlgorithmCode'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['AggregateType'])) {
            $model->aggregateType = $map['AggregateType'];
        }

        return $model;
    }
}
