<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportOrderDetailResponseBody\dataExportOrderDetail;

use AlibabaCloud\Tea\Model;

class keyInfo extends Model
{
    /**
     * @description The status of the data export ticket. Valid values:
     *
     *   PRE_CHECKING: The ticket is being prechecked.
     *   PRE_CHECK_SUCCESS: The ticket passes the precheck.
     *   PRE_CHECK_FAIL: The ticket fails to pass the precheck.
     *   WAITING_APPLY_AUDIT: The ticket is to be submitted for approval.
     *   APPLY_AUDIT_SUCESS: The ticket is submitted for approval.
     *   ENABLE_EXPORT: The ticket is approved. Data can be exported.
     *   WAITING_EXPORT: Data is to be scheduled for export.
     *   DOING_EXPORT: Data is being exported.
     *   EXPORT_FAIL: Data fails to be exported.
     *   EXPORT_SUCCESS: Data is exported.
     *
     * @example EXPORT_SUCCESS
     *
     * @var string
     */
    public $jobStatus;

    /**
     * @description The ID of the precheck.
     *
     * @example 123
     *
     * @var int
     */
    public $preCheckId;
    protected $_name = [
        'jobStatus'  => 'JobStatus',
        'preCheckId' => 'PreCheckId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobStatus) {
            $res['JobStatus'] = $this->jobStatus;
        }
        if (null !== $this->preCheckId) {
            $res['PreCheckId'] = $this->preCheckId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobStatus'])) {
            $model->jobStatus = $map['JobStatus'];
        }
        if (isset($map['PreCheckId'])) {
            $model->preCheckId = $map['PreCheckId'];
        }

        return $model;
    }
}
