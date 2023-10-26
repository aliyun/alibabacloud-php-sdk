<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyModifyRequest;

use AlibabaCloud\Tea\Model;

class carRule extends Model
{
    /**
     * @var string
     */
    public $scenarioTemplateId;

    /**
     * @var string
     */
    public $scenarioTemplateName;
    protected $_name = [
        'scenarioTemplateId'   => 'scenario_template_id',
        'scenarioTemplateName' => 'scenario_template_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->scenarioTemplateId) {
            $res['scenario_template_id'] = $this->scenarioTemplateId;
        }
        if (null !== $this->scenarioTemplateName) {
            $res['scenario_template_name'] = $this->scenarioTemplateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return carRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['scenario_template_id'])) {
            $model->scenarioTemplateId = $map['scenario_template_id'];
        }
        if (isset($map['scenario_template_name'])) {
            $model->scenarioTemplateName = $map['scenario_template_name'];
        }

        return $model;
    }
}
