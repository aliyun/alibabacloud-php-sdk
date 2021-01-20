<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template\applyHistories;
use AlibabaCloud\Tea\Model;

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
    public $gmtModified;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'applyHistories' => 'ApplyHistories',
        'description'    => 'Description',
        'gmtCreate'      => 'GmtCreate',
        'name'           => 'Name',
        'restVersion'    => 'RestVersion',
        'gmtModified'    => 'GmtModified',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyHistories) {
            $res['ApplyHistories'] = null !== $this->applyHistories ? $this->applyHistories->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
