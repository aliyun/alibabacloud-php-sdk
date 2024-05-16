<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetQualityRuleRequest extends Model
{
    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the compute engine instance or data source.
     *
     * This parameter is required.
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the monitoring rule. You can call the [ListQualityRules](https://help.aliyun.com/document_detail/173995.html) operation to query the ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $ruleId;
    protected $_name = [
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
        'ruleId'      => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQualityRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
