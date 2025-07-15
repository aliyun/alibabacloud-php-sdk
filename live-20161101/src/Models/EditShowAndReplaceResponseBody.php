<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class EditShowAndReplaceResponseBody extends Model
{
    /**
     * @description The information about the editing task. The following fields are included:
     *
     *   **vodId**: the ID of the VOD file.
     *   **mediaid**: the ID of the media file.
     *   **jobId**: the ID of the editing task.
     *
     * @example {         "vodId": "3e34733b40b9a96ccf5c1ff6f69****",         "mediaid": "eb1861d2c9a842340e989dd56****",         "jobId": "7d2fbc380b0e08e55fe98733764****"     }
     *
     * @var string
     */
    public $jobInfo;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'jobInfo' => 'JobInfo',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobInfo) {
            $res['JobInfo'] = $this->jobInfo;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return EditShowAndReplaceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobInfo'])) {
            $model->jobInfo = $map['JobInfo'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
