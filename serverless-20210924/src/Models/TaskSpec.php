<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\Tea\Model;

class TaskSpec extends Model
{
    /**
     * @var Context
     */
    public $context;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'context'      => 'context',
        'templateName' => 'templateName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskSpec
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

        return $model;
    }
}
