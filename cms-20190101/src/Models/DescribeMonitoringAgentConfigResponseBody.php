<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class DescribeMonitoringAgentConfigResponseBody extends Model
{
    /**
     * @var bool
     */
    public $autoInstall;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $enableActiveAlert;

    /**
     * @var bool
     */
    public $enableInstallAgentNewECS;

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
    protected $_name = [
        'autoInstall' => 'AutoInstall',
        'code' => 'Code',
        'enableActiveAlert' => 'EnableActiveAlert',
        'enableInstallAgentNewECS' => 'EnableInstallAgentNewECS',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoInstall) {
            $res['AutoInstall'] = $this->autoInstall;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->enableActiveAlert) {
            $res['EnableActiveAlert'] = $this->enableActiveAlert;
        }

        if (null !== $this->enableInstallAgentNewECS) {
            $res['EnableInstallAgentNewECS'] = $this->enableInstallAgentNewECS;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoInstall'])) {
            $model->autoInstall = $map['AutoInstall'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['EnableActiveAlert'])) {
            $model->enableActiveAlert = $map['EnableActiveAlert'];
        }

        if (isset($map['EnableInstallAgentNewECS'])) {
            $model->enableInstallAgentNewECS = $map['EnableInstallAgentNewECS'];
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

        return $model;
    }
}
