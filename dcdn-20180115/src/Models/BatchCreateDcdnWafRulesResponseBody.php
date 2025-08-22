<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchCreateDcdnWafRulesResponseBody\ruleIds;

class BatchCreateDcdnWafRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ruleIds
     */
    public $ruleIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleIds' => 'RuleIds',
    ];

    public function validate()
    {
        if (null !== $this->ruleIds) {
            $this->ruleIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toArray($noStream) : $this->ruleIds;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleIds'])) {
            $model->ruleIds = ruleIds::fromMap($map['RuleIds']);
        }

        return $model;
    }
}
