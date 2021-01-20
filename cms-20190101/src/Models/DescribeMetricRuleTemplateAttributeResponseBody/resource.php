<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateAttributeResponseBody\resource\alertTemplates;
use AlibabaCloud\Tea\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var alertTemplates
     */
    public $alertTemplates;

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
        'description'    => 'Description',
        'alertTemplates' => 'AlertTemplates',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->alertTemplates) {
            $res['AlertTemplates'] = null !== $this->alertTemplates ? $this->alertTemplates->toMap() : null;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AlertTemplates'])) {
            $model->alertTemplates = alertTemplates::fromMap($map['AlertTemplates']);
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
