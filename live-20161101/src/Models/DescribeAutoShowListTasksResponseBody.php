<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeAutoShowListTasksResponseBody extends Model
{
    /**
     * @description The information about the scheduled tasks. The following fields are included:
     *
     *   Status: the status of the scheduled task. Valid values: 0 and 1. A value of 0 indicates that the scheduled task is paused. A value of 1 indicates that the scheduled task is started.
     *   LiveTemplate: the transcoding templates.
     *   TranscodeConfig: the transcoding configuration for the source URL.
     *   CasterId: the ID of the production studio.
     *
     * @example {"Status":0,"TranscodeConfig":{"CasterTemplate":"lp_hd", "LiveTemplate":["lhd","lsd"]}, "CasterId":"cce04ef3-2226-4865-8704-f84b8375****"}
     *
     * @var string
     */
    public $autoShowListTasks;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoShowListTasks' => 'AutoShowListTasks',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoShowListTasks) {
            $res['AutoShowListTasks'] = $this->autoShowListTasks;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAutoShowListTasksResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoShowListTasks'])) {
            $model->autoShowListTasks = $map['AutoShowListTasks'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
