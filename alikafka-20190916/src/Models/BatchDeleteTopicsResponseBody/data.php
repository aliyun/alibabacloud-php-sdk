<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\BatchDeleteTopicsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alikafka\V20190916\Models\BatchDeleteTopicsResponseBody\data\results;

class data extends Model
{
    /**
     * @var int
     */
    public $failedCount;

    /**
     * @var results
     */
    public $results;

    /**
     * @var int
     */
    public $successCount;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'failedCount' => 'FailedCount',
        'results' => 'Results',
        'successCount' => 'SuccessCount',
        'total' => 'Total',
    ];

    public function validate()
    {
        if (null !== $this->results) {
            $this->results->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedCount) {
            $res['FailedCount'] = $this->failedCount;
        }

        if (null !== $this->results) {
            $res['Results'] = null !== $this->results ? $this->results->toArray($noStream) : $this->results;
        }

        if (null !== $this->successCount) {
            $res['SuccessCount'] = $this->successCount;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['FailedCount'])) {
            $model->failedCount = $map['FailedCount'];
        }

        if (isset($map['Results'])) {
            $model->results = results::fromMap($map['Results']);
        }

        if (isset($map['SuccessCount'])) {
            $model->successCount = $map['SuccessCount'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
