<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class RunLog extends Model
{
    /**
     * @var string
     */
    public $driverStartup;

    /**
     * @var string
     */
    public $driverStdError;

    /**
     * @var string
     */
    public $driverStdOut;

    /**
     * @var string
     */
    public $driverSyslog;
    protected $_name = [
        'driverStartup'  => 'driverStartup',
        'driverStdError' => 'driverStdError',
        'driverStdOut'   => 'driverStdOut',
        'driverSyslog'   => 'driverSyslog',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driverStartup) {
            $res['driverStartup'] = $this->driverStartup;
        }
        if (null !== $this->driverStdError) {
            $res['driverStdError'] = $this->driverStdError;
        }
        if (null !== $this->driverStdOut) {
            $res['driverStdOut'] = $this->driverStdOut;
        }
        if (null !== $this->driverSyslog) {
            $res['driverSyslog'] = $this->driverSyslog;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunLog
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['driverStartup'])) {
            $model->driverStartup = $map['driverStartup'];
        }
        if (isset($map['driverStdError'])) {
            $model->driverStdError = $map['driverStdError'];
        }
        if (isset($map['driverStdOut'])) {
            $model->driverStdOut = $map['driverStdOut'];
        }
        if (isset($map['driverSyslog'])) {
            $model->driverSyslog = $map['driverSyslog'];
        }

        return $model;
    }
}
