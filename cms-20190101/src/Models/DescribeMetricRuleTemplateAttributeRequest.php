<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRuleTemplateAttributeRequest extends Model
{
    /**
     * @description The name of the alert template. You must specify at least one of the `Name` and `TemplateId` parameters.
     *
     * For more information about how to query the names of alert templates, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example ECS_Template1
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the alert template. You must specify at least one of the `Name` and `TemplateId` parameters.
     *
     * For more information about how to query the IDs of alert templates, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example 70****
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'name'       => 'Name',
        'regionId'   => 'RegionId',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleTemplateAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
