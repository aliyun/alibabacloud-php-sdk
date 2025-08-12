<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates;

class ModifyMetricRuleTemplateRequest extends Model
{
    /**
     * @var alertTemplates[]
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
    public $regionId;

    /**
     * @var int
     */
    public $restVersion;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'alertTemplates' => 'AlertTemplates',
        'description' => 'Description',
        'name' => 'Name',
        'regionId' => 'RegionId',
        'restVersion' => 'RestVersion',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        if (\is_array($this->alertTemplates)) {
            Model::validateArray($this->alertTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertTemplates) {
            if (\is_array($this->alertTemplates)) {
                $res['AlertTemplates'] = [];
                $n1 = 0;
                foreach ($this->alertTemplates as $item1) {
                    $res['AlertTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTemplates'])) {
            if (!empty($map['AlertTemplates'])) {
                $model->alertTemplates = [];
                $n1 = 0;
                foreach ($map['AlertTemplates'] as $item1) {
                    $model->alertTemplates[$n1] = alertTemplates::fromMap($item1);
                    ++$n1;
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
