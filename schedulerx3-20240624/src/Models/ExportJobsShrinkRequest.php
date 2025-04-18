<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class ExportJobsShrinkRequest extends Model
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
     * @example 1
     *
     * @var int
     */
    public $exportJobType;

    /**
     * @description -
     *
     * @var string
     */
    public $jobIdsShrink;
    protected $_name = [
        'appName' => 'AppName',
        'clusterId' => 'ClusterId',
        'exportJobType' => 'ExportJobType',
        'jobIdsShrink' => 'JobIds',
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
        if (null !== $this->exportJobType) {
            $res['ExportJobType'] = $this->exportJobType;
        }
        if (null !== $this->jobIdsShrink) {
            $res['JobIds'] = $this->jobIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportJobsShrinkRequest
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
        if (isset($map['ExportJobType'])) {
            $model->exportJobType = $map['ExportJobType'];
        }
        if (isset($map['JobIds'])) {
            $model->jobIdsShrink = $map['JobIds'];
        }

        return $model;
    }
}
