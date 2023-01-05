<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models;

use AlibabaCloud\Tea\Model;

class UpdateRecordPlanRequest extends Model
{
    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example 6c5a397bc17c4b48ace86f0f0c30****
     *
     * @var string
     */
    public $planId;

    /**
     * @example 36f06322442e4e3f85a5ae8862c9****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'       => 'Name',
        'planId'     => 'PlanId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRecordPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
