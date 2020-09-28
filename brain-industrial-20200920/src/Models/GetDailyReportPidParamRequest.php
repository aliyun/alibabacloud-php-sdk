<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class GetDailyReportPidParamRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var string
     */
    public $pidReportDate;
    protected $_name = [
        'pidLoopId'     => 'PidLoopId',
        'pidReportDate' => 'PidReportDate',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->pidReportDate) {
            $res['PidReportDate'] = $this->pidReportDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDailyReportPidParamRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidReportDate'])) {
            $model->pidReportDate = $map['PidReportDate'];
        }

        return $model;
    }
}
