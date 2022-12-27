<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchCreateDcdnWafRulesResponseBody\ruleIds;
use AlibabaCloud\Tea\Model;

class BatchCreateDcdnWafRulesResponseBody extends Model
{
    /**
     * @example CB1A380B-09F0-41BB-280B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var ruleIds
     */
    public $ruleIds;
    protected $_name = [
        'requestId' => 'RequestId',
        'ruleIds'   => 'RuleIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ruleIds) {
            $res['RuleIds'] = null !== $this->ruleIds ? $this->ruleIds->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateDcdnWafRulesResponseBody
     */
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
