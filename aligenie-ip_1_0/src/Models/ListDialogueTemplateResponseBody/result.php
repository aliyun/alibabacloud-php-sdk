<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListDialogueTemplateResponseBody\result\templateDetail;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var templateDetail
     */
    public $templateDetail;

    /**
     * @example 4
     *
     * @var int
     */
    public $templateId;

    /**
     * @example 物品多轮模板
     *
     * @var string
     */
    public $templateName;

    /**
     * @example GOODS
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'templateDetail' => 'TemplateDetail',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->templateDetail) {
            $res['TemplateDetail'] = null !== $this->templateDetail ? $this->templateDetail->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TemplateDetail'])) {
            $model->templateDetail = templateDetail::fromMap($map['TemplateDetail']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
