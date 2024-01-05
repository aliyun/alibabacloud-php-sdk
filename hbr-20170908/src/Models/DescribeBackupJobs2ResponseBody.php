<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs;
use AlibabaCloud\Tea\Model;

class DescribeBackupJobs2ResponseBody extends Model
{
    /**
     * @description The backup jobs that meet the specified conditions.
     *
     * @var backupJobs
     */
    public $backupJobs;

    /**
     * @description The HTTP status code. The status code 200 indicates that the call is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The page number of the returned page. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page. Valid values: 1 to 99. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful. Valid values:
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of returned backup jobs that meet the specified conditions.
     *
     * @example 8
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'backupJobs' => 'BackupJobs',
        'code'       => 'Code',
        'message'    => 'Message',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'success'    => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backupJobs) {
            $res['BackupJobs'] = null !== $this->backupJobs ? $this->backupJobs->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupJobs2ResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackupJobs'])) {
            $model->backupJobs = backupJobs::fromMap($map['BackupJobs']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
