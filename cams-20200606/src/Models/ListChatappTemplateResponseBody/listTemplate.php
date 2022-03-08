<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListChatappTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class listTemplate extends Model
{
    /**
     * @description 审核状态
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @description 模板分类
     *
     * @var string
     */
    public $category;

    /**
     * @description 语言
     *
     * @var string
     */
    public $language;

    /**
     * @description 模板编码
     *
     * @var string
     */
    public $templateCode;

    /**
     * @description 模板名称
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'auditStatus'  => 'AuditStatus',
        'category'     => 'Category',
        'language'     => 'Language',
        'templateCode' => 'TemplateCode',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
