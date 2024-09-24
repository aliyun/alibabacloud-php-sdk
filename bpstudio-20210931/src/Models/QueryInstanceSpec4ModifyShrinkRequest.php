<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class QueryInstanceSpec4ModifyShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example BE68D71ZY5YYIU9R
     *
     * @var string
     */
    public $applicationId;

    /**
     * @description This parameter is required.
     *
     * @example rm-uf66k9143r2ch*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $methodName;

    /**
     * @var string
     */
    public $parametersShrink;
    protected $_name = [
        'applicationId'    => 'ApplicationId',
        'instanceId'       => 'InstanceId',
        'methodName'       => 'MethodName',
        'parametersShrink' => 'Parameters',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->methodName) {
            $res['MethodName'] = $this->methodName;
        }
        if (null !== $this->parametersShrink) {
            $res['Parameters'] = $this->parametersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstanceSpec4ModifyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MethodName'])) {
            $model->methodName = $map['MethodName'];
        }
        if (isset($map['Parameters'])) {
            $model->parametersShrink = $map['Parameters'];
        }

        return $model;
    }
}
