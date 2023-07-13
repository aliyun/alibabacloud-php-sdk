<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMonitoringAgentConfigResponseBody extends Model
{
    /**
     * @description Indicates whether the Cloud Monitor agent is automatically installed on existing Elastic Compute Service (ECS) instances. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $autoInstall;

    /**
     * @description The status code.
     *
     * >  The status code 200 indicates a success.
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The service for which one-click alert is enabled.
     *
     * @example redis,rds,ecs
     *
     * @var string
     */
    public $enableActiveAlert;

    /**
     * @description Indicates whether the Cloud Monitor agent is automatically installed on new ECS instances. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableInstallAgentNewECS;

    /**
     * @description The error message.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example E9F4FA2A-54BE-4EF9-9D1D-1A0B1DC86B8D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation was successful. Valid values:
     *
     *   true: successful.
     *   false: failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'autoInstall'              => 'AutoInstall',
        'code'                     => 'Code',
        'enableActiveAlert'        => 'EnableActiveAlert',
        'enableInstallAgentNewECS' => 'EnableInstallAgentNewECS',
        'message'                  => 'Message',
        'requestId'                => 'RequestId',
        'success'                  => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeMonitoringAgentConfigResponseBody
     */
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
