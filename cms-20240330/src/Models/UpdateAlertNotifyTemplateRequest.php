<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class UpdateAlertNotifyTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $alertNotifyTemplateName;

    /**
     * @var mixed[][]
     */
    public $templates;
    protected $_name = [
        'alertNotifyTemplateName' => 'alertNotifyTemplateName',
        'templates' => 'templates',
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
        if (null !== $this->alertNotifyTemplateName) {
            $res['alertNotifyTemplateName'] = $this->alertNotifyTemplateName;
        }

        if (null !== $this->templates) {
            if (\is_array($this->templates)) {
                $res['templates'] = [];
                foreach ($this->templates as $key1 => $value1) {
                    $res['templates'][$key1] = $value1;
                }
            }
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
        if (isset($map['alertNotifyTemplateName'])) {
            $model->alertNotifyTemplateName = $map['alertNotifyTemplateName'];
        }

        if (isset($map['templates'])) {
            if (!empty($map['templates'])) {
                $model->templates = [];
                foreach ($map['templates'] as $key1 => $value1) {
                    $model->templates[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
