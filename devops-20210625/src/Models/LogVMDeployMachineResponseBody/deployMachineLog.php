<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\LogVMDeployMachineResponseBody;

use AlibabaCloud\Tea\Model;

class deployMachineLog extends Model
{
    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $aliyunRegion;

    /**
     * @example 11111111111
     *
     * @var int
     */
    public $deployBeginTime;

    /**
     * @example 12222222
     *
     * @var int
     */
    public $deployEndTime;

    /**
     * @example success
     *
     * @var string
     */
    public $deployLog;

    /**
     * @example /tmp/log
     *
     * @var string
     */
    public $deployLogPath;
    protected $_name = [
        'aliyunRegion'    => 'aliyunRegion',
        'deployBeginTime' => 'deployBeginTime',
        'deployEndTime'   => 'deployEndTime',
        'deployLog'       => 'deployLog',
        'deployLogPath'   => 'deployLogPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunRegion) {
            $res['aliyunRegion'] = $this->aliyunRegion;
        }
        if (null !== $this->deployBeginTime) {
            $res['deployBeginTime'] = $this->deployBeginTime;
        }
        if (null !== $this->deployEndTime) {
            $res['deployEndTime'] = $this->deployEndTime;
        }
        if (null !== $this->deployLog) {
            $res['deployLog'] = $this->deployLog;
        }
        if (null !== $this->deployLogPath) {
            $res['deployLogPath'] = $this->deployLogPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployMachineLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aliyunRegion'])) {
            $model->aliyunRegion = $map['aliyunRegion'];
        }
        if (isset($map['deployBeginTime'])) {
            $model->deployBeginTime = $map['deployBeginTime'];
        }
        if (isset($map['deployEndTime'])) {
            $model->deployEndTime = $map['deployEndTime'];
        }
        if (isset($map['deployLog'])) {
            $model->deployLog = $map['deployLog'];
        }
        if (isset($map['deployLogPath'])) {
            $model->deployLogPath = $map['deployLogPath'];
        }

        return $model;
    }
}
