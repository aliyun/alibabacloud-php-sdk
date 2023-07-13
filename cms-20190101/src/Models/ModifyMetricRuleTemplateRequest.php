<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates;
use AlibabaCloud\Tea\Model;

class ModifyMetricRuleTemplateRequest extends Model
{
    /**
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
     * @description The name of the alert rule. Valid values of N: 1 to 200.
     *
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
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example 0
     *
     * @var int
     */
    public $restVersion;

    /**
     * @description The callback URL. Valid values of N: 1 to 200.
     *
     * The callback URL must be accessible over the Internet. CloudMonitor sends a POST request to push an alert notification to the callback URL that you specify. Only HTTP requests are supported.
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
