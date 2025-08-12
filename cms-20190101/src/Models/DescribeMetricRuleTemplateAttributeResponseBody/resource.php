<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates;

class resource extends Model
{
    /**
     * @var alertTemplates
     */
    public $alertTemplates;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $restVersion;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'alertTemplates' => 'AlertTemplates',
        'description' => 'Description',
        'name' => 'Name',
        'restVersion' => 'RestVersion',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (null !== $this->alertTemplates) {
            $this->alertTemplates->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTemplates) {
            $res['AlertTemplates'] = null !== $this->alertTemplates ? $this->alertTemplates->toArray($noStream) : $this->alertTemplates;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
