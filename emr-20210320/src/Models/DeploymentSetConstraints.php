<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class DeploymentSetConstraints extends Model
{
    /**
     * @description 默认值。
     *
     * @example CLUSTER
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @example 是否启用部署集限制策略
     *
     * @var string
     */
    public $enableState;

    /**
     * @description 替换策略。
     *
     * @var ReplacementStrategy
     */
    public $replacementStrategy;

    /**
     * @description 枚举值。
     *
     * @example ["CLUSTER","NODE_GROUP","NONE"]
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'defaultValue'        => 'DefaultValue',
        'enableState'         => 'EnableState',
        'replacementStrategy' => 'ReplacementStrategy',
        'values'              => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->enableState) {
            $res['EnableState'] = $this->enableState;
        }
        if (null !== $this->replacementStrategy) {
            $res['ReplacementStrategy'] = null !== $this->replacementStrategy ? $this->replacementStrategy->toMap() : null;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeploymentSetConstraints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['EnableState'])) {
            $model->enableState = $map['EnableState'];
        }
        if (isset($map['ReplacementStrategy'])) {
            $model->replacementStrategy = ReplacementStrategy::fromMap($map['ReplacementStrategy']);
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
