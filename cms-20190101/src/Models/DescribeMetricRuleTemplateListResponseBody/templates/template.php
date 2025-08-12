<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template\applyHistories;

class template extends Model
{
    /**
     * @var applyHistories
     */
    public $applyHistories;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $restVersion;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'applyHistories' => 'ApplyHistories',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'name' => 'Name',
        'restVersion' => 'RestVersion',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (null !== $this->applyHistories) {
            $this->applyHistories->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyHistories) {
            $res['ApplyHistories'] = null !== $this->applyHistories ? $this->applyHistories->toArray($noStream) : $this->applyHistories;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
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
        if (isset($map['ApplyHistories'])) {
            $model->applyHistories = applyHistories::fromMap($map['ApplyHistories']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
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
