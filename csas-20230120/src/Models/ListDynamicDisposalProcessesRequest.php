<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListDynamicDisposalProcessesRequest extends Model
{
    /**
     * @description The page number to display in the paginated query. Range: 1~10000.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description Terminal device ID.
     *
     * @example E7798391-2554-FE83-E0B7-045DDED629A8
     *
     * @var string
     */
    public $devTag;

    /**
     * @description Disposal action.
     * - **ztna_connect**: Prohibit connection to the zero-trust intranet.
     * - **nac_connect**: Prohibit connection to the office network access.
     * - **none**: No disposal action.
     *
     * @example none
     *
     * @var string
     */
    public $disposalAction;

    /**
     * @description Disposal process ID.
     *
     * @example dp-xxxxxxxx
     *
     * @var string
     */
    public $disposalProcessId;

    /**
     * @description The end time for querying dynamic disposal processes. Format: Unix timestamp (in seconds).
     *
     * @example 1743143296
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The number of items per page in the paginated query. Range: 1~1000.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Recovery type.
     * - **auto**: Automatic recovery.
     * - **console**: Console recovery.
     * - **auth**: Recovery by authentication and reporting.
     *
     * @example auto
     *
     * @var string
     */
    public $recoveryType;

    /**
     * @description The start time for querying dynamic disposal processes. Format: Unix timestamp (in seconds).
     *
     * @example 1743143296
     *
     * @var int
     */
    public $startTime;

    /**
     * @description Disposal status. Values:
     * - **disposal**: In the disposal state.
     * - **finished**: Already automatically recovered.
     * - **recovery**: Recovered by authentication and reporting or console recovery.
     *
     * @example disposal
     *
     * @var string
     */
    public $status;

    /**
     * @description Username.
     *
     * @example xiaoming
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'devTag' => 'DevTag',
        'disposalAction' => 'DisposalAction',
        'disposalProcessId' => 'DisposalProcessId',
        'endTime' => 'EndTime',
        'pageSize' => 'PageSize',
        'recoveryType' => 'RecoveryType',
        'startTime' => 'StartTime',
        'status' => 'Status',
        'userName' => 'UserName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->devTag) {
            $res['DevTag'] = $this->devTag;
        }
        if (null !== $this->disposalAction) {
            $res['DisposalAction'] = $this->disposalAction;
        }
        if (null !== $this->disposalProcessId) {
            $res['DisposalProcessId'] = $this->disposalProcessId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->recoveryType) {
            $res['RecoveryType'] = $this->recoveryType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDynamicDisposalProcessesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DevTag'])) {
            $model->devTag = $map['DevTag'];
        }
        if (isset($map['DisposalAction'])) {
            $model->disposalAction = $map['DisposalAction'];
        }
        if (isset($map['DisposalProcessId'])) {
            $model->disposalProcessId = $map['DisposalProcessId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RecoveryType'])) {
            $model->recoveryType = $map['RecoveryType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
