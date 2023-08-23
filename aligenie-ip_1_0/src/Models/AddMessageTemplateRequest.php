<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models;

use AlibabaCloud\Tea\Model;

class AddMessageTemplateRequest extends Model
{
    /**
     * @example 这是${hotel}的一个测试模板
     *
     * @var string
     */
    public $templateDetail;

    /**
     * @example 测试模板
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'templateDetail' => 'TemplateDetail',
        'templateName'   => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateDetail) {
            $res['TemplateDetail'] = $this->templateDetail;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddMessageTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateDetail'])) {
            $model->templateDetail = $map['TemplateDetail'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
