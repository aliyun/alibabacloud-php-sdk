<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class ExportOssCheckStatRequest extends Model
{
    /**
     * @var bool
     */
    public $byMonth;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $parentTaskId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $startDate;
    protected $_name = [
        'byMonth' => 'ByMonth',
        'endDate' => 'EndDate',
        'parentTaskId' => 'ParentTaskId',
        'regionId' => 'RegionId',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->byMonth) {
            $res['ByMonth'] = $this->byMonth;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->parentTaskId) {
            $res['ParentTaskId'] = $this->parentTaskId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['ByMonth'])) {
            $model->byMonth = $map['ByMonth'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['ParentTaskId'])) {
            $model->parentTaskId = $map['ParentTaskId'];
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
