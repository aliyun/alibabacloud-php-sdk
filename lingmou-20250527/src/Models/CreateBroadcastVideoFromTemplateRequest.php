<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\LingMou\V20250527\Models\CreateBroadcastVideoFromTemplateRequest\videoOptions;

class CreateBroadcastVideoFromTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var TemplateVariable[]
     */
    public $variables;

    /**
     * @var videoOptions
     */
    public $videoOptions;
    protected $_name = [
        'name' => 'name',
        'templateId' => 'templateId',
        'variables' => 'variables',
        'videoOptions' => 'videoOptions',
    ];

    public function validate()
    {
        if (\is_array($this->variables)) {
            Model::validateArray($this->variables);
        }
        if (null !== $this->videoOptions) {
            $this->videoOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }

        if (null !== $this->variables) {
            if (\is_array($this->variables)) {
                $res['variables'] = [];
                $n1 = 0;
                foreach ($this->variables as $item1) {
                    $res['variables'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->videoOptions) {
            $res['videoOptions'] = null !== $this->videoOptions ? $this->videoOptions->toArray($noStream) : $this->videoOptions;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        if (isset($map['variables'])) {
            if (!empty($map['variables'])) {
                $model->variables = [];
                $n1 = 0;
                foreach ($map['variables'] as $item1) {
                    $model->variables[$n1] = TemplateVariable::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['videoOptions'])) {
            $model->videoOptions = videoOptions::fromMap($map['videoOptions']);
        }

        return $model;
    }
}
