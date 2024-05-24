<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Tea\Model;

class PipelineSpec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @example my-pipeline-template
     *
     * @var string
     */
    public $templateName;

    /**
     * @var PipelineTemplateSpec
     */
    public $templateSpec;
    protected $_name = [
        'context'      => 'context',
        'templateName' => 'templateName',
        'templateSpec' => 'templateSpec',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->context) {
            $res['context'] = null !== $this->context ? $this->context->toMap() : null;
        }
        if (null !== $this->templateName) {
            $res['templateName'] = $this->templateName;
        }
        if (null !== $this->templateSpec) {
            $res['templateSpec'] = null !== $this->templateSpec ? $this->templateSpec->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PipelineSpec
     */
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
