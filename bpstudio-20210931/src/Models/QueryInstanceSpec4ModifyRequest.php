<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BPStudio\V20210931\Models;

use AlibabaCloud\Tea\Model;

class QueryInstanceSpec4ModifyRequest extends Model
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
     * @var mixed[]
     */
    public $parameters;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'instanceId'    => 'InstanceId',
        'methodName'    => 'MethodName',
        'parameters'    => 'Parameters',
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
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryInstanceSpec4ModifyRequest
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
            $model->parameters = $map['Parameters'];
        }

        return $model;
    }
}
