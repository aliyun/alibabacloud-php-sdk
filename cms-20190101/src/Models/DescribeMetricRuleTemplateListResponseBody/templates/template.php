<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleTemplateListResponseBody\templates\template\applyHistories;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The ID of the request.
     *
     * @var applyHistories
     */
    public $applyHistories;

    /**
     * @description The order in which you want to sort alert templates. Default value: true. Valid values:
     *
     *   true: ascending order
     *   false: descending order
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the application group.
     *
     * @example 1646018798000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The number of the page to return.
     *
     * Default value: 1
     * @example 1646054798000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description The application history of the alert template.
     *
     * @example ECS_Template1
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the alert template.
     *
     * @example 0
     *
     * @var int
     */
    public $restVersion;

    /**
     * @description The description of the alert template.
     *
     * @example 70****
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'applyHistories' => 'ApplyHistories',
        'description'    => 'Description',
        'gmtCreate'      => 'GmtCreate',
        'gmtModified'    => 'GmtModified',
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
        if (null !== $this->applyHistories) {
            $res['ApplyHistories'] = null !== $this->applyHistories ? $this->applyHistories->toMap() : null;
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
