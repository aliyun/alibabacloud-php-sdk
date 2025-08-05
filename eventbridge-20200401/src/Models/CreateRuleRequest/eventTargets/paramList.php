<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateRuleRequest\eventTargets;

use AlibabaCloud\Tea\Model;

class paramList extends Model
{
    /**
     * @description The format of input parameters for the event target. For more information, see [Limits](https://help.aliyun.com/document_detail/163289.html).
     *
     * @example TEMPLATE
     *
     * @var string
     */
    public $form;

    /**
     * @description The resource key of the event target. For more information, see [Limits](https://help.aliyun.com/document_detail/163289.html).
     *
     * @example body
     *
     * @var string
     */
    public $resourceKey;

    /**
     * @description The structure of the template for the event target.
     *
     * @example The value of ${key} is ${value}!
     *
     * @var string
     */
    public $template;

    /**
     * @description The value of the event target parameter.
     *
     * @example {\\"key\\"=\\"value\\"}
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'form' => 'Form',
        'resourceKey' => 'ResourceKey',
        'template' => 'Template',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->form) {
            $res['Form'] = $this->form;
        }
        if (null !== $this->resourceKey) {
            $res['ResourceKey'] = $this->resourceKey;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paramList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Form'])) {
            $model->form = $map['Form'];
        }
        if (isset($map['ResourceKey'])) {
            $model->resourceKey = $map['ResourceKey'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
