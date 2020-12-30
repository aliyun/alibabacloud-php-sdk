<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class PublishRuleRequest extends Model
{
    /**
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'ruleType' => 'RuleType',
        'sceneId'  => 'SceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        return $model;
    }
}
