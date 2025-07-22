<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DeleteReportDefinitionRequest extends Model
{
    /**
     * @example 2684201000001
     *
     * @var string
     */
    public $nbid;

    /**
     * @description This parameter is required.
     *
     * @example 123123
     *
     * @var int
     */
    public $reportTaskId;
    protected $_name = [
        'nbid' => 'Nbid',
        'reportTaskId' => 'ReportTaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->nbid) {
            $res['Nbid'] = $this->nbid;
        }
        if (null !== $this->reportTaskId) {
            $res['ReportTaskId'] = $this->reportTaskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteReportDefinitionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Nbid'])) {
            $model->nbid = $map['Nbid'];
        }
        if (isset($map['ReportTaskId'])) {
            $model->reportTaskId = $map['ReportTaskId'];
        }

        return $model;
    }
}
