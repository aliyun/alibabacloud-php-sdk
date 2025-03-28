<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class PipelineSpec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var PipelineTemplateSpec
     */
    public $templateSpec;
    protected $_name = [
        'context' => 'context',
        'templateName' => 'templateName',
        'templateSpec' => 'templateSpec',
    ];

    public function validate()
    {
        if (null !== $this->context) {
            $this->context->validate();
        }
        if (null !== $this->templateSpec) {
            $this->templateSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toArray($noStream) : $this->context;
        }

        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }

        if (null !== $this->templateSpec) {
            $res['templateSpec'] = null !== $this->templateSpec ? $this->templateSpec->toArray($noStream) : $this->templateSpec;
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
        if (isset($map['context'])) {
            $model->context = Context::fromMap($map['context']);
        }

        if (isset($map['templateName'])) {
            $model->templateName = $map['templateName'];
        }

        if (isset($map['templateSpec'])) {
            $model->templateSpec = PipelineTemplateSpec::fromMap($map['templateSpec']);
        }

        return $model;
    }
}
