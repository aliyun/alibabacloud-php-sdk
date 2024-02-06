<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\SDK\Sls\V20201230\Models\OSSExportConfiguration\sink;
use AlibabaCloud\Tea\Model;

class OSSExportConfiguration extends Model
{
    /**
     * @example 123456789
     *
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
     * @var sink
     */
    public $sink;

    /**
     * @example 123456789
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
     * @return OSSExportConfiguration
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
            $model->sink = sink::fromMap($map['sink']);
        }
        if (isset($map['toTime'])) {
            $model->toTime = $map['toTime'];
        }

        return $model;
    }
}
