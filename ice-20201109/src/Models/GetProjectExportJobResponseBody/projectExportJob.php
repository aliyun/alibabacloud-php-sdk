<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob\exportResult;
use AlibabaCloud\Tea\Model;

class projectExportJob extends Model
{
    /**
     * @example InvalidParameter
     *
     * @var string
     */
    public $code;

    /**
     * @var exportResult
     */
    public $exportResult;

    /**
     * @example BaseTimeline
     *
     * @var string
     */
    public $exportType;

    /**
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example The specified parameter is not valid.
     *
     * @var string
     */
    public $message;

    /**
     * @example ****fddd7748b58bf1d47e95****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @example {"NotifyAddress":"http://xx.xx.xxx","Key":"Valuexxx"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'code'         => 'Code',
        'exportResult' => 'ExportResult',
        'exportType'   => 'ExportType',
        'jobId'        => 'JobId',
        'message'      => 'Message',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->exportResult) {
            $res['ExportResult'] = null !== $this->exportResult ? $this->exportResult->toMap() : null;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectExportJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ExportResult'])) {
            $model->exportResult = exportResult::fromMap($map['ExportResult']);
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
