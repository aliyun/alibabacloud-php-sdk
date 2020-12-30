<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleRequest extends Model
{
    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $ruleType;
    protected $_name = [
        'sceneId'  => 'SceneId',
        'ruleType' => 'RuleType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        return $model;
    }
}
