<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeRtcCloudRecordingFilesResponseBody\taskInfo;
use AlibabaCloud\Tea\Model;

class DescribeRtcCloudRecordingFilesResponseBody extends Model
{
    /**
     * @example ******58-5876-****-83CA-B56278******
     *
     * @var string
     */
    public $requestId;

    /**
     * @var taskInfo
     */
    public $taskInfo;
    protected $_name = [
        'requestId' => 'RequestId',
        'taskInfo' => 'TaskInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskInfo) {
            $res['TaskInfo'] = null !== $this->taskInfo ? $this->taskInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRtcCloudRecordingFilesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskInfo'])) {
            $model->taskInfo = taskInfo::fromMap($map['TaskInfo']);
        }

        return $model;
    }
}
