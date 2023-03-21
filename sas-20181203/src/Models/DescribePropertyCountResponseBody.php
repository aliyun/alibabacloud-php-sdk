<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $autorun;

    /**
     * @var int
     */
    public $cron;

    /**
     * @var int
     */
    public $database;

    /**
     * @var int
     */
    public $lkm;

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

    /**
     * @var int
     */
    public $web;

    /**
     * @var int
     */
    public $webserver;
    protected $_name = [
        'autorun'   => 'Autorun',
        'cron'      => 'Cron',
        'database'  => 'Database',
        'lkm'       => 'Lkm',
        'port'      => 'Port',
        'process'   => 'Process',
        'requestId' => 'RequestId',
        'sca'       => 'Sca',
        'software'  => 'Software',
        'user'      => 'User',
        'web'       => 'Web',
        'webserver' => 'Webserver',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autorun) {
            $res['Autorun'] = $this->autorun;
        }
        if (null !== $this->cron) {
            $res['Cron'] = $this->cron;
        }
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->lkm) {
            $res['Lkm'] = $this->lkm;
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
        if (null !== $this->web) {
            $res['Web'] = $this->web;
        }
        if (null !== $this->webserver) {
            $res['Webserver'] = $this->webserver;
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
        if (isset($map['Autorun'])) {
            $model->autorun = $map['Autorun'];
        }
        if (isset($map['Cron'])) {
            $model->cron = $map['Cron'];
        }
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['Lkm'])) {
            $model->lkm = $map['Lkm'];
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
        if (isset($map['Web'])) {
            $model->web = $map['Web'];
        }
        if (isset($map['Webserver'])) {
            $model->webserver = $map['Webserver'];
        }

        return $model;
    }
}
