<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates;
use AlibabaCloud\Tea\Model;

class ModifyMetricRuleTemplateRequest extends Model
{
    /**
     * @description The details of the alert template.
     *
     * @var alertTemplates[]
     */
    public $alertTemplates;

    /**
     * @description The description of the alert template.
     *
     * @example ECS_template1
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the alert template.
     *
     * For information about how to obtain the name of an alert template, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example test123
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The version of the alert template. The version changes with the number of times that the alert template is modified.
     *
     * For information about how to obtain the version of an alert template, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example 0
     *
     * @var int
     */
    public $restVersion;

    /**
     * @description The ID of the alert template.
     *
     * For information about how to obtain the ID of an alert template, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example 123456
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'alertTemplates' => 'AlertTemplates',
        'description'    => 'Description',
        'name'           => 'Name',
        'regionId'       => 'RegionId',
        'restVersion'    => 'RestVersion',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTemplates) {
            $res['AlertTemplates'] = [];
            if (null !== $this->alertTemplates && \is_array($this->alertTemplates)) {
                $n = 0;
                foreach ($this->alertTemplates as $item) {
                    $res['AlertTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMetricRuleTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTemplates'])) {
            if (!empty($map['AlertTemplates'])) {
                $model->alertTemplates = [];
                $n                     = 0;
                foreach ($map['AlertTemplates'] as $item) {
                    $model->alertTemplates[$n++] = null !== $item ? alertTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
