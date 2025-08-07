<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models;

use AlibabaCloud\Dara\Model;

class AddRuleV4Request extends Model
{
    /**
     * @var int
     */
    public $baseMeAgentId;

    /**
     * @var bool
     */
    public $isCopy;

    /**
     * @var string
     */
    public $jsonStrForRule;
    protected $_name = [
        'baseMeAgentId' => 'BaseMeAgentId',
        'isCopy' => 'IsCopy',
        'jsonStrForRule' => 'JsonStrForRule',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseMeAgentId) {
            $res['BaseMeAgentId'] = $this->baseMeAgentId;
        }

        if (null !== $this->isCopy) {
            $res['IsCopy'] = $this->isCopy;
        }

        if (null !== $this->jsonStrForRule) {
            $res['JsonStrForRule'] = $this->jsonStrForRule;
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
        if (isset($map['BaseMeAgentId'])) {
            $model->baseMeAgentId = $map['BaseMeAgentId'];
        }

        if (isset($map['IsCopy'])) {
            $model->isCopy = $map['IsCopy'];
        }

        if (isset($map['JsonStrForRule'])) {
            $model->jsonStrForRule = $map['JsonStrForRule'];
        }

        return $model;
    }
}
