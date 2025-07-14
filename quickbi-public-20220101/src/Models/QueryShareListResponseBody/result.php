<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryShareListResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @description Sharing permissions. Possible values:
     *
     * - 1: View only
     * - 3: View and export
     *
     * @example 3
     *
     * @var int
     */
    public $authPoint;

    /**
     * @description The timestamp in milliseconds indicating the expiration time of the authorization.
     *
     * @example 1640102400000
     *
     * @var int
     */
    public $expireDate;

    /**
     * @description The ID of the work.
     *
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
     */
    public $reportId;

    /**
     * @description The ID of the sharing configuration.
     *
     * @example 0ab9659e-29cf-47d7-a364-3a91553b****
     *
     * @var string
     */
    public $shareId;

    /**
     * @description The ID of the sharing target, which could be a user ID or a group ID in Quick BI.
     *
     * - When ShareToType=2 (all members within an organization), ShareToId is the organization ID.
     *
     * @example 95296e95-ca89-4c7d-8af9-dedf0ad0****
     *
     * @var string
     */
    public $shareToId;

    /**
     * @description The name of the sharing target.
     *
     * @example test
     *
     * @var string
     */
    public $shareToName;

    /**
     * @description The type of sharing. Possible values:
     *
     * - 0: User
     * - 1: Group
     * - 2: Organization
     * - 3: Space
     *
     * @example 0
     *
     * @var int
     */
    public $shareToType;

    /**
     * @description The type of the shared work. The value range includes:
     * - dataProduct: Data Portal
     * - dashboard: Dashboard
     * - report: Spreadsheet
     * - dashboardOfflineQuery: Self-service Data Extraction
     * - ANALYSIS: Ad-hoc Analysis
     * - DATAFORM: Data Entry
     * - SCREEN: Data Visualization Screen
     *
     * @example dashboard
     *
     * @var string
     */
    public $shareType;
    protected $_name = [
        'authPoint' => 'AuthPoint',
        'expireDate' => 'ExpireDate',
        'reportId' => 'ReportId',
        'shareId' => 'ShareId',
        'shareToId' => 'ShareToId',
        'shareToName' => 'ShareToName',
        'shareToType' => 'ShareToType',
        'shareType' => 'ShareType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authPoint) {
            $res['AuthPoint'] = $this->authPoint;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }
        if (null !== $this->shareToId) {
            $res['ShareToId'] = $this->shareToId;
        }
        if (null !== $this->shareToName) {
            $res['ShareToName'] = $this->shareToName;
        }
        if (null !== $this->shareToType) {
            $res['ShareToType'] = $this->shareToType;
        }
        if (null !== $this->shareType) {
            $res['ShareType'] = $this->shareType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthPoint'])) {
            $model->authPoint = $map['AuthPoint'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }
        if (isset($map['ShareToId'])) {
            $model->shareToId = $map['ShareToId'];
        }
        if (isset($map['ShareToName'])) {
            $model->shareToName = $map['ShareToName'];
        }
        if (isset($map['ShareToType'])) {
            $model->shareToType = $map['ShareToType'];
        }
        if (isset($map['ShareType'])) {
            $model->shareType = $map['ShareType'];
        }

        return $model;
    }
}
