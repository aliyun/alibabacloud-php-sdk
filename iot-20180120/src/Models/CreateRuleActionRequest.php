<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleActionRequest extends Model
{
    /**
     * @example {"topic":"/a1POX0c****\/device1/user/get","topicType":1}
     *
     * @var string
     */
    public $configuration;

    /**
     * @example false
     *
     * @var bool
     */
    public $errorActionFlag;

    /**
     * @example iot-cn-0pp1n8t****
     *
     * @var string
     */
    public $iotInstanceId;

    /**
     * @example 100000
     *
     * @var int
     */
    public $ruleId;

    /**
     * @example REPUBLISH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'configuration'   => 'Configuration',
        'errorActionFlag' => 'ErrorActionFlag',
        'iotInstanceId'   => 'IotInstanceId',
        'ruleId'          => 'RuleId',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->errorActionFlag) {
            $res['ErrorActionFlag'] = $this->errorActionFlag;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRuleActionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['ErrorActionFlag'])) {
            $model->errorActionFlag = $map['ErrorActionFlag'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
