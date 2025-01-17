<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetProjectExportJobResponseBody\projectExportJob\exportResult;

class projectExportJob extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var exportResult
     */
    public $exportResult;
    /**
     * @var string
     */
    public $exportType;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $status;
    /**
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
        if (null !== $this->exportResult) {
            $this->exportResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->exportResult) {
            $res['ExportResult'] = null !== $this->exportResult ? $this->exportResult->toArray($noStream) : $this->exportResult;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
