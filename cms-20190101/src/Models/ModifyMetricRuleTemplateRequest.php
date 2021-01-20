<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\ModifyMetricRuleTemplateRequest\alertTemplates;
use AlibabaCloud\Tea\Model;

class ModifyMetricRuleTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $restVersion;

    /**
     * @var alertTemplates[]
     */
    public $alertTemplates;
    protected $_name = [
        'templateId'     => 'TemplateId',
        'name'           => 'Name',
        'description'    => 'Description',
        'restVersion'    => 'RestVersion',
        'alertTemplates' => 'AlertTemplates',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->restVersion) {
            $res['RestVersion'] = $this->restVersion;
        }
        if (null !== $this->alertTemplates) {
            $res['AlertTemplates'] = [];
            if (null !== $this->alertTemplates && \is_array($this->alertTemplates)) {
                $n = 0;
                foreach ($this->alertTemplates as $item) {
                    $res['AlertTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RestVersion'])) {
            $model->restVersion = $map['RestVersion'];
        }
        if (isset($map['AlertTemplates'])) {
            if (!empty($map['AlertTemplates'])) {
                $model->alertTemplates = [];
                $n                     = 0;
                foreach ($map['AlertTemplates'] as $item) {
                    $model->alertTemplates[$n++] = null !== $item ? alertTemplates::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
