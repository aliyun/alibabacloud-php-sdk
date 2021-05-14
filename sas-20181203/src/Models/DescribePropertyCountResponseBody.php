<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $process;

    /**
     * @var int
     */
    public $autoRun;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $user;

    /**
     * @var int
     */
    public $software;

    /**
     * @var int
     */
    public $cron;

    /**
     * @var int
     */
    public $port;

    /**
     * @var int
     */
    public $sca;
    protected $_name = [
        'process'   => 'Process',
        'autoRun'   => 'AutoRun',
        'requestId' => 'RequestId',
        'user'      => 'User',
        'software'  => 'Software',
        'cron'      => 'Cron',
        'port'      => 'Port',
        'sca'       => 'Sca',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->autoRun) {
            $res['AutoRun'] = $this->autoRun;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->software) {
            $res['Software'] = $this->software;
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->sca) {
            $res['Sca'] = $this->sca;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['AutoRun'])) {
            $model->autoRun = $map['AutoRun'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['Software'])) {
            $model->software = $map['Software'];
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Sca'])) {
            $model->sca = $map['Sca'];
        }

        return $model;
    }
}
