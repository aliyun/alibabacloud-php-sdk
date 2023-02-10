<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponseBody;

use AlibabaCloud\Tea\Model;

class ruleActionInfo extends Model
{
    /**
     * @example {\"topic\":\"/sys/a1zSA28****\/device/thing/service/property/set\",\"topicType\":0,\"uid\":\"1231579*******\"}
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
     * @example 100001
     *
     * @var int
     */
    public $id;

    /**
     * @example 152323
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
        'id'              => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
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
     * @return ruleActionInfo
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
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
