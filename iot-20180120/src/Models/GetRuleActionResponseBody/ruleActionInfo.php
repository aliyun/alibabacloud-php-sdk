<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetRuleActionResponseBody;

use AlibabaCloud\Tea\Model;

class ruleActionInfo extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $configuration;

    /**
     * @var bool
     */
    public $errorActionFlag;
    protected $_name = [
        'id'              => 'Id',
        'ruleId'          => 'RuleId',
        'type'            => 'Type',
        'configuration'   => 'Configuration',
        'errorActionFlag' => 'ErrorActionFlag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->configuration) {
            $res['Configuration'] = $this->configuration;
        }
        if (null !== $this->errorActionFlag) {
            $res['ErrorActionFlag'] = $this->errorActionFlag;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Configuration'])) {
            $model->configuration = $map['Configuration'];
        }
        if (isset($map['ErrorActionFlag'])) {
            $model->errorActionFlag = $map['ErrorActionFlag'];
        }

        return $model;
    }
}
