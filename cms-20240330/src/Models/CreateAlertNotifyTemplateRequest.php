<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class CreateAlertNotifyTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $alertNotifyTemplateId;

    /**
     * @var string
     */
    public $alertNotifyTemplateName;

    /**
     * @var string
     */
    public $programLang;

    /**
     * @var mixed[][]
     */
    public $templates;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'alertNotifyTemplateId' => 'alertNotifyTemplateId',
        'alertNotifyTemplateName' => 'alertNotifyTemplateName',
        'programLang' => 'programLang',
        'templates' => 'templates',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->templates)) {
            Model::validateArray($this->templates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertNotifyTemplateId) {
            $res['alertNotifyTemplateId'] = $this->alertNotifyTemplateId;
        }

        if (null !== $this->alertNotifyTemplateName) {
            $res['alertNotifyTemplateName'] = $this->alertNotifyTemplateName;
        }

        if (null !== $this->programLang) {
            $res['programLang'] = $this->programLang;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['templates'] = [];
                foreach ($this->templates as $key1 => $value1) {
                    $res['templates'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alertNotifyTemplateId'])) {
            $model->alertNotifyTemplateId = $map['alertNotifyTemplateId'];
        }

        if (isset($map['alertNotifyTemplateName'])) {
            $model->alertNotifyTemplateName = $map['alertNotifyTemplateName'];
        }

        if (isset($map['programLang'])) {
            $model->programLang = $map['programLang'];
        }

        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                foreach ($map['templates'] as $key1 => $value1) {
                    $model->templates[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
