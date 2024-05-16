<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListInstanceAmountRequest extends Model
{
    /**
     * @description The beginning of the time range to query, accurate to the day. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2021-06-13T00:00:00+0800
     *
     * @var string
     */
    public $beginDate;

    /**
     * @description The end of the time range to query, accurate to the day. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * This parameter is required.
     * @example 2021-06-16T00:00:00+0800
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The ID of the DataWorks workspace. You can log on to the DataWorks console and go to the Workspace Management page to obtain the ID.
     *
     * This parameter is required.
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'beginDate' => 'BeginDate',
        'endDate'   => 'EndDate',
        'projectId' => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginDate) {
            $res['BeginDate'] = $this->beginDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstanceAmountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginDate'])) {
            $model->beginDate = $map['BeginDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
