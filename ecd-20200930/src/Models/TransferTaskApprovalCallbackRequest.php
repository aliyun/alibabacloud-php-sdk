<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class TransferTaskApprovalCallbackRequest extends Model
{
    /**
     * @example ed****-17337752804***
     *
     * @var string
     */
    public $ossBucketName;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ossBucketRegionId;

    /**
     * @example Approved
     *
     * @var string
     */
    public $result;

    /**
     * @example trt-msndfksm18fs****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'ossBucketName' => 'OssBucketName',
        'ossBucketRegionId' => 'OssBucketRegionId',
        'result' => 'Result',
        'taskId' => 'TaskId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ossBucketName) {
            $res['OssBucketName'] = $this->ossBucketName;
        }
        if (null !== $this->ossBucketRegionId) {
            $res['OssBucketRegionId'] = $this->ossBucketRegionId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TransferTaskApprovalCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OssBucketName'])) {
            $model->ossBucketName = $map['OssBucketName'];
        }
        if (isset($map['OssBucketRegionId'])) {
            $model->ossBucketRegionId = $map['OssBucketRegionId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
