<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CancelReportShareRequest extends Model
{
    /**
     * @description The ID of the work. The works here include BI portal, dashboards, spreadsheets, and self-service access.
     *
     * This parameter is required.
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The ID of the person to be shared, which may be the user ID of the Quick BI or the user group ID.
     *
     *   If ShareToType is 0 (user), ShareTo is the user ID.
     *   When ShareToType is set to 1 (user group), ShareTo is the user group ID.
     *   When ShareToType=2 (organization), ShareTo is the ID of the organization.
     *
     * This parameter is required.
     * @example de4bc5f9429141cc8091cdd1c15b****
     *
     * @var string
     */
    public $shareToIds;

    /**
     * @description The deletion method. Valid values:
     *
     *   0: Delete by user
     *   1: Delete by user group
     *   2: Delete by organization
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $shareToType;
    protected $_name = [
        'reportId'    => 'ReportId',
        'shareToIds'  => 'ShareToIds',
        'shareToType' => 'ShareToType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->shareToIds) {
            $res['ShareToIds'] = $this->shareToIds;
        }
        if (null !== $this->shareToType) {
            $res['ShareToType'] = $this->shareToType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelReportShareRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ShareToIds'])) {
            $model->shareToIds = $map['ShareToIds'];
        }
        if (isset($map['ShareToType'])) {
            $model->shareToType = $map['ShareToType'];
        }

        return $model;
    }
}
