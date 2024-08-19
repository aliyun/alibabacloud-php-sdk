<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Tea\Model;

class ExportTextScanResultShrinkRequest extends Model
{
    /**
     * @example 2024-03-11 10:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $queryShrink;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 2024-03-10 10:00:00
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'     => 'EndDate',
        'queryShrink' => 'Query',
        'regionId'    => 'RegionId',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->queryShrink) {
            $res['Query'] = $this->queryShrink;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportTextScanResultShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Query'])) {
            $model->queryShrink = $map['Query'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
