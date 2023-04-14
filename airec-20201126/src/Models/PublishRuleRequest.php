<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class PublishRuleRequest extends Model
{
    /**
     * @description selection
     * opertaion
     * @example selection
     *
     * @var string
     */
    public $ruleType;

    /**
     * @example test
     *
     * @var string
     */
    public $sceneId;
    protected $_name = [
        'ruleType' => 'ruleType',
        'sceneId'  => 'sceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleType) {
            $res['ruleType'] = $this->ruleType;
        }
        if (null !== $this->sceneId) {
            $res['sceneId'] = $this->sceneId;
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
        if (isset($map['ruleType'])) {
            $model->ruleType = $map['ruleType'];
        }
        if (isset($map['sceneId'])) {
            $model->sceneId = $map['sceneId'];
        }

        return $model;
    }
}
