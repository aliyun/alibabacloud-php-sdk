<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class SetupStudioAppAuthModeOpenRequest extends Model
{
    /**
     * @example a12*****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1
     *
     * @var int
     */
    public $authMode;

    /**
     * @example iot_instc_pu****_c*-v64********
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example a123********
     *
     * @var string
     */
    public $projectId;
    protected $_name = [
        'appId'         => 'AppId',
        'authMode'      => 'AuthMode',
        'iotInstanceId' => 'IotInstanceId',
        'projectId'     => 'ProjectId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->authMode) {
            $res['AuthMode'] = $this->authMode;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetupStudioAppAuthModeOpenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuthMode'])) {
            $model->authMode = $map['AuthMode'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
