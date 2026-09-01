<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class CreateTemplateBuildConfig extends Model
{
    /**
     * @var CreateTemplateCopyAction
     */
    public $copy;

    /**
     * @var CreateTemplateEnvdInjectAction
     */
    public $envdInject;
    protected $_name = [
        'copy' => 'copy',
        'envdInject' => 'envdInject',
    ];

    public function validate()
    {
        if (null !== $this->copy) {
            $this->copy->validate();
        }
        if (null !== $this->envdInject) {
            $this->envdInject->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->copy) {
            $res['copy'] = null !== $this->copy ? $this->copy->toArray($noStream) : $this->copy;
        }

        if (null !== $this->envdInject) {
            $res['envdInject'] = null !== $this->envdInject ? $this->envdInject->toArray($noStream) : $this->envdInject;
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
        if (isset($map['copy'])) {
            $model->copy = CreateTemplateCopyAction::fromMap($map['copy']);
        }

        if (isset($map['envdInject'])) {
            $model->envdInject = CreateTemplateEnvdInjectAction::fromMap($map['envdInject']);
        }

        return $model;
    }
}
