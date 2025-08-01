<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\GetListRecordResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 16896fa8-37f6-4c70-bb32-67fa9817d426
     *
     * @var string
     */
    public $analysisId;

    /**
     * @example 2024-12-24 12:02:05
     *
     * @var string
     */
    public $analysisTime;

    /**
     * @example timeout=2000 ms
     *
     * @var string
     */
    public $arguments;

    /**
     * @var string
     */
    public $failedLog;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'analysisId' => 'analysisId',
        'analysisTime' => 'analysisTime',
        'arguments' => 'arguments',
        'failedLog' => 'failedLog',
        'status' => 'status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisId) {
            $res['analysisId'] = $this->analysisId;
        }
        if (null !== $this->analysisTime) {
            $res['analysisTime'] = $this->analysisTime;
        }
        if (null !== $this->arguments) {
            $res['arguments'] = $this->arguments;
        }
        if (null !== $this->failedLog) {
            $res['failedLog'] = $this->failedLog;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analysisId'])) {
            $model->analysisId = $map['analysisId'];
        }
        if (isset($map['analysisTime'])) {
            $model->analysisTime = $map['analysisTime'];
        }
        if (isset($map['arguments'])) {
            $model->arguments = $map['arguments'];
        }
        if (isset($map['failedLog'])) {
            $model->failedLog = $map['failedLog'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
