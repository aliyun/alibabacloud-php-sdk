<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CliTask extends Model
{
    /**
     * @var string
     */
    public $agentIp;

    /**
     * @var string
     */
    public $cliTaskId;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $output;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $responseCode;

    /**
     * @var string
     */
    public $result;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'agentIp'      => 'AgentIp',
        'cliTaskId'    => 'CliTaskId',
        'command'      => 'Command',
        'deviceId'     => 'DeviceId',
        'gmtCreate'    => 'GmtCreate',
        'gmtModify'    => 'GmtModify',
        'output'       => 'Output',
        'protocol'     => 'Protocol',
        'responseCode' => 'ResponseCode',
        'result'       => 'Result',
        'sessionId'    => 'SessionId',
        'status'       => 'Status',
        'timeout'      => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentIp) {
            $res['AgentIp'] = $this->agentIp;
        }
        if (null !== $this->cliTaskId) {
            $res['CliTaskId'] = $this->cliTaskId;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->output) {
            $res['Output'] = $this->output;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->responseCode) {
            $res['ResponseCode'] = $this->responseCode;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CliTask
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentIp'])) {
            $model->agentIp = $map['AgentIp'];
        }
        if (isset($map['CliTaskId'])) {
            $model->cliTaskId = $map['CliTaskId'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['ResponseCode'])) {
            $model->responseCode = $map['ResponseCode'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
