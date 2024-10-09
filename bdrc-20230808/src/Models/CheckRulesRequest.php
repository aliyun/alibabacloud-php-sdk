<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Tea\Model;

class CheckRulesRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example acs:ecs:123***890:cn-shanghai:instance/i-001***90
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @example rule-000***dav
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'resourceArn' => 'ResourceArn',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
