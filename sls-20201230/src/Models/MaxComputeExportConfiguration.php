<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class MaxComputeExportConfiguration extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $fromTime;

    /**
     * @description This parameter is required.
     *
     * @example sls-logstore-demo
     *
     * @var string
     */
    public $logstore;

    /**
     * @description This parameter is required.
     *
     * @example acs:ram::123456789:role/aliyunlogdefaultrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description This parameter is required.
     *
     * @var MaxComputeExportConfigurationSink
     */
    public $sink;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $toTime;
    protected $_name = [
        'fromTime' => 'fromTime',
        'logstore' => 'logstore',
        'roleArn'  => 'roleArn',
        'sink'     => 'sink',
        'toTime'   => 'toTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromTime) {
            $res['fromTime'] = $this->fromTime;
        }
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->roleArn) {
            $res['roleArn'] = $this->roleArn;
        }
        if (null !== $this->sink) {
            $res['sink'] = null !== $this->sink ? $this->sink->toMap() : null;
        }
        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MaxComputeExportConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fromTime'])) {
            $model->fromTime = $map['fromTime'];
        }
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['roleArn'])) {
            $model->roleArn = $map['roleArn'];
        }
        if (isset($map['sink'])) {
            $model->sink = MaxComputeExportConfigurationSink::fromMap($map['sink']);
        }
        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
