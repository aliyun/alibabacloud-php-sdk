<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class DeleteJobsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description -
     *
     * @var int[]
     */
    public $jobIds;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'jobIds' => 'JobIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobIds) {
            $res['JobIds'] = $this->jobIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobIds'])) {
            if (!empty($map['JobIds'])) {
                $model->jobIds = $map['JobIds'];
            }
        }

        return $model;
    }
}
