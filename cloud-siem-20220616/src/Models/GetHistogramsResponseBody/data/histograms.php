<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\GetHistogramsResponseBody\data;

use AlibabaCloud\Tea\Model;

class histograms extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $completedOrNot;

    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @example 1409529600
     *
     * @var int
     */
    public $from;

    /**
     * @example 1409569200
     *
     * @var int
     */
    public $to;
    protected $_name = [
        'completedOrNot' => 'CompletedOrNot',
        'count'          => 'Count',
        'from'           => 'From',
        'to'             => 'To',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedOrNot) {
            $res['CompletedOrNot'] = $this->completedOrNot;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->to) {
            $res['To'] = $this->to;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histograms
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedOrNot'])) {
            $model->completedOrNot = $map['CompletedOrNot'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['To'])) {
            $model->to = $map['To'];
        }

        return $model;
    }
}
