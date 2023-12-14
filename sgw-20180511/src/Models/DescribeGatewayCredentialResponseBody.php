<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeGatewayCredentialResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $consolePassword;

    /**
     * @var string
     */
    public $consoleUsername;

    /**
     * @var string
     */
    public $ecsIp;

    /**
     * @var string
     */
    public $ecsPassword;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'code'            => 'Code',
        'consolePassword' => 'ConsolePassword',
        'consoleUsername' => 'ConsoleUsername',
        'ecsIp'           => 'EcsIp',
        'ecsPassword'     => 'EcsPassword',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->consolePassword) {
            $res['ConsolePassword'] = $this->consolePassword;
        }
        if (null !== $this->consoleUsername) {
            $res['ConsoleUsername'] = $this->consoleUsername;
        }
        if (null !== $this->ecsIp) {
            $res['EcsIp'] = $this->ecsIp;
        }
        if (null !== $this->ecsPassword) {
            $res['EcsPassword'] = $this->ecsPassword;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayCredentialResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConsolePassword'])) {
            $model->consolePassword = $map['ConsolePassword'];
        }
        if (isset($map['ConsoleUsername'])) {
            $model->consoleUsername = $map['ConsoleUsername'];
        }
        if (isset($map['EcsIp'])) {
            $model->ecsIp = $map['EcsIp'];
        }
        if (isset($map['EcsPassword'])) {
            $model->ecsPassword = $map['EcsPassword'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
