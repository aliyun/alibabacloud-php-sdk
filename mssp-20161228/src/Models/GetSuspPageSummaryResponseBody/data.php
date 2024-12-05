<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetSuspPageSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Number of completed items.
     *
     * @example 10
     *
     * @var int
     */
    public $completedCount;

    /**
     * @description Number of items being processed.
     *
     * @example 10
     *
     * @var int
     */
    public $handingCount;

    /**
     * @description Number of high-risk items.
     *
     * @example 10
     *
     * @var int
     */
    public $highCount;

    /**
     * @description Number of low-risk items.
     *
     * @example 10
     *
     * @var int
     */
    public $lowCount;

    /**
     * @description Number of medium-risk items.
     *
     * @example 10
     *
     * @var int
     */
    public $mediumCount;

    /**
     * @description Total number of items.
     *
     * @example 30
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Number of unhandled items.
     *
     * @example 10
     *
     * @var int
     */
    public $waitHandleCount;
    protected $_name = [
        'completedCount'  => 'CompletedCount',
        'handingCount'    => 'HandingCount',
        'highCount'       => 'HighCount',
        'lowCount'        => 'LowCount',
        'mediumCount'     => 'MediumCount',
        'totalCount'      => 'TotalCount',
        'waitHandleCount' => 'WaitHandleCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completedCount) {
            $res['CompletedCount'] = $this->completedCount;
        }
        if (null !== $this->handingCount) {
            $res['HandingCount'] = $this->handingCount;
        }
        if (null !== $this->highCount) {
            $res['HighCount'] = $this->highCount;
        }
        if (null !== $this->lowCount) {
            $res['LowCount'] = $this->lowCount;
        }
        if (null !== $this->mediumCount) {
            $res['MediumCount'] = $this->mediumCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->waitHandleCount) {
            $res['WaitHandleCount'] = $this->waitHandleCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompletedCount'])) {
            $model->completedCount = $map['CompletedCount'];
        }
        if (isset($map['HandingCount'])) {
            $model->handingCount = $map['HandingCount'];
        }
        if (isset($map['HighCount'])) {
            $model->highCount = $map['HighCount'];
        }
        if (isset($map['LowCount'])) {
            $model->lowCount = $map['LowCount'];
        }
        if (isset($map['MediumCount'])) {
            $model->mediumCount = $map['MediumCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['WaitHandleCount'])) {
            $model->waitHandleCount = $map['WaitHandleCount'];
        }

        return $model;
    }
}
