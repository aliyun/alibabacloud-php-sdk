<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @description The list of alert templates.
     *
     * @var alertTemplates
     */
    public $alertTemplates;

    /**
     * @var string
     */
    public $description;

    /**
     * @description The name of the alert template.
     *
     * @example ECS_Template1
     *
     * @var string
     */
    public $name;

    /**
     * @description The version of the alert template.
     *
     * @example 1
     *
     * @var string
     */
    public $restVersion;

    /**
     * @description The ID of the alert template.
     *
     * @example 70****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'alertTemplates' => 'AlertTemplates',
        'description'    => 'Description',
        'name'           => 'Name',
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
            $res['AlertTemplates'] = null !== $this->alertTemplates ? $this->alertTemplates->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
     * @return resource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTemplates'])) {
            $model->alertTemplates = alertTemplates::fromMap($map['AlertTemplates']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
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
