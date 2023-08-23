<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListHotelMessageTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 不通过
     *
     * @var string
     */
    public $auditMark;

    /**
     * @example COMMIT
     *
     * @var string
     */
    public $auditStatus;

    /**
     * @example 这是${hotel}的一个测试模板
     *
     * @var string
     */
    public $templateDetail;

    /**
     * @example 1
     *
     * @var int
     */
    public $templateId;

    /**
     * @example 测试模板
     *
     * @var string
     */
    public $templateName;
    protected $_name = [
        'auditMark'      => 'AuditMark',
        'auditStatus'    => 'AuditStatus',
        'templateDetail' => 'TemplateDetail',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditMark) {
            $res['AuditMark'] = $this->auditMark;
        }
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->templateDetail) {
            $res['TemplateDetail'] = $this->templateDetail;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['AuditMark'])) {
            $model->auditMark = $map['AuditMark'];
        }
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['TemplateDetail'])) {
            $model->templateDetail = $map['TemplateDetail'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
