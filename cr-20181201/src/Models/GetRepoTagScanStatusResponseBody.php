<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Tea\Model;

class GetRepoTagScanStatusResponseBody extends Model
{
    /**
     * @example success
     *
     * @var string
     */
    public $code;

    /**
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @example BC648259-91A7-4502-BED3-EDF64361FA83
     *
     * @var string
     */
    public $requestId;

    /**
     * @example ACR_SCAN_SERVICE
     *
     * @var string
     */
    public $scanService;

    /**
     * @example COMPLETE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code'        => 'Code',
        'isSuccess'   => 'IsSuccess',
        'requestId'   => 'RequestId',
        'scanService' => 'ScanService',
        'status'      => 'Status',
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
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->scanService) {
            $res['ScanService'] = $this->scanService;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRepoTagScanStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ScanService'])) {
            $model->scanService = $map['ScanService'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
