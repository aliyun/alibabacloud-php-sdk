<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeDownloadTaskResponseBody;

use AlibabaCloud\Tea\Model;

class tasks extends Model
{
    /**
     * @description The time when the task was created. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1706595827
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The expiration time of the task. The value is a UNIX timestamp. Unit: seconds.
     *
     * @example 1714371828
     *
     * @var int
     */
    public $expireTime;

    /**
     * @description The size of the file.
     *
     * @example 24.04KB
     *
     * @var string
     */
    public $fileSize;

    /**
     * @description The URL of the OSS object.
     *
     * @example https://cfw-table-download-cn.oss-cn-hangzhou.aliyuncs.com/%E4%BA%92%E8%81%94%E7%BD%91%E8%BE%B9%E7%95%8C%E9%98%B2%E7%81%AB%E5%A2%99%E8%B5%84%E4%BA%A7-IPv4_1069.csv?Expires=1708583913&OSSAccessKeyId=LTAI5t89DcGQ3jfhnywv1PLY&Signature=h38bRzYTL2pz0hjTVsNsaVCw4V8%3D
     *
     * @var string
     */
    public $fileURL;

    /**
     * @description The status of the task. Valid values:
     *
     *   **finish**
     *   **start**
     *   **error**
     *   **expire**: The task file is invalid and cannot be downloaded.
     *
     * @example finish
     *
     * @var string
     */
    public $status;

    /**
     * @description The task ID.
     *
     * @example 1111
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The name of the task.
     *
     * @var string
     */
    public $taskName;

    /**
     * @description The type of the task.
     *
     * @example InternetFirewallAsset
     *
     * @var string
     */
    public $taskType;
    protected $_name = [
        'createTime' => 'CreateTime',
        'expireTime' => 'ExpireTime',
        'fileSize'   => 'FileSize',
        'fileURL'    => 'FileURL',
        'status'     => 'Status',
        'taskId'     => 'TaskId',
        'taskName'   => 'TaskName',
        'taskType'   => 'TaskType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileURL) {
            $res['FileURL'] = $this->fileURL;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->taskName) {
            $res['TaskName'] = $this->taskName;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tasks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileURL'])) {
            $model->fileURL = $map['FileURL'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TaskName'])) {
            $model->taskName = $map['TaskName'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }

        return $model;
    }
}
