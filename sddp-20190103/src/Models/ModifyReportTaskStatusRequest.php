<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class ModifyReportTaskStatusRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $reportTaskStatus;
    protected $_name = [
        'lang'             => 'Lang',
        'reportTaskStatus' => 'ReportTaskStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->reportTaskStatus) {
            $res['ReportTaskStatus'] = $this->reportTaskStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyReportTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['ReportTaskStatus'])) {
            $model->reportTaskStatus = $map['ReportTaskStatus'];
        }

        return $model;
    }
}
