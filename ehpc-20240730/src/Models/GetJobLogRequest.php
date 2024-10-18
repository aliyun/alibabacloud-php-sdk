<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class GetJobLogRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-jeJki6****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The job ID.
     *
     * This parameter is required.
     * @example 1.manager
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The log type. Valid values:
     *
     *   stdout: standard output logs.
     *   stderr: error output logs.
     *   all: all logs.
     *
     * Default value: all.
     * @example stdout
     *
     * @var string
     */
    public $logType;

    /**
     * @description The position where logs start to be read.
     *
     * Default value: 0.
     * @example 0
     *
     * @var string
     */
    public $offset;

    /**
     * @description The maximum size of logs that you can read in a single request.
     *
     * Default value: 10240.
     * @example 20480
     *
     * @var string
     */
    public $size;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'jobId'     => 'JobId',
        'logType'   => 'LogType',
        'offset'    => 'Offset',
        'size'      => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetJobLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
