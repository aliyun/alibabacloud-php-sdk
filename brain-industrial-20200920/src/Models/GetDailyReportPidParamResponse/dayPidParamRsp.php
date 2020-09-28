<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportPidParamResponse;

use AlibabaCloud\SDK\Brainindustrial\V20200920\Models\GetDailyReportPidParamResponse\dayPidParamRsp\dayPidParam;
use AlibabaCloud\Tea\Model;

class dayPidParamRsp extends Model
{
    /**
     * @var bool
     */
    public $status;

    /**
     * @var dayPidParam
     */
    public $dayPidParam;
    protected $_name = [
        'status'      => 'Status',
        'dayPidParam' => 'DayPidParam',
    ];

    public function validate()
    {
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('dayPidParam', $this->dayPidParam, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dayPidParam) {
            $res['DayPidParam'] = null !== $this->dayPidParam ? $this->dayPidParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dayPidParamRsp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DayPidParam'])) {
            $model->dayPidParam = dayPidParam::fromMap($map['DayPidParam']);
        }

        return $model;
    }
}
