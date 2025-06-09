<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class MaxComputeExportConfiguration extends Model
{
    /**
     * @var int
     */
    public $fromTime;

    /**
     * @var string
     */
    public $logstore;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var MaxComputeExportConfigurationSink
     */
    public $sink;

    /**
     * @var int
     */
    public $toTime;
    protected $_name = [
        'fromTime' => 'fromTime',
        'logstore' => 'logstore',
        'roleArn' => 'roleArn',
        'sink' => 'sink',
        'toTime' => 'toTime',
    ];

    public function validate()
    {
        if (null !== $this->sink) {
            $this->sink->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['sink'] = null !== $this->sink ? $this->sink->toArray($noStream) : $this->sink;
        }

        if (null !== $this->toTime) {
            $res['toTime'] = $this->toTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
