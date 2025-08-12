<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;

class CreateMetricRuleResourcesRequest extends Model
{
    /**
     * @var string
     */
    public $overwrite;

    /**
     * @var string
     */
    public $resources;

    /**
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'overwrite' => 'Overwrite',
        'resources' => 'Resources',
        'ruleId' => 'RuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
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
        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
