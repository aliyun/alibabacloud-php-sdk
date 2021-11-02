<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $autoRun;

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
    public $process;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sca;

    /**
     * @var int
     */
    public $software;

    /**
     * @var int
     */
    public $user;
    protected $_name = [
        'autoRun'   => 'AutoRun',
        'cron'      => 'Cron',
        'port'      => 'Port',
        'process'   => 'Process',
        'requestId' => 'RequestId',
        'sca'       => 'Sca',
        'software'  => 'Software',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRun) {
            $res['AutoRun'] = $this->autoRun;
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->process) {
            $res['Process'] = $this->process;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sca) {
            $res['Sca'] = $this->sca;
        }
        if (null !== $this->software) {
            $res['Software'] = $this->software;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['AutoRun'])) {
            $model->autoRun = $map['AutoRun'];
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Process'])) {
            $model->process = $map['Process'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Sca'])) {
            $model->sca = $map['Sca'];
        }
        if (isset($map['Software'])) {
            $model->software = $map['Software'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
