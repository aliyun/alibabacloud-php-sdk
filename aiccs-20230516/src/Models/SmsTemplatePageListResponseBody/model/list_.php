<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models\SmsTemplatePageListResponseBody\model;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 短信内容
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $content;

    /**
     * @description 创建时间
     *
     * @example 2021-09-26 11:34:59
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 模板所需参数
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $properties;

    /**
     * @description 智能短链ID
     *
     * @example 46
     *
     * @var int
     */
    public $shortUrlTaskId;

    /**
     * @description 短信签名
     *
     * @example a234n
     *
     * @var string
     */
    public $sign;

    /**
     * @description 短信类型
     *
     * @example 示例值示例值
     *
     * @var string
     */
    public $smsType;

    /**
     * @description 模板状态
     *
     * @example 18
     *
     * @var int
     */
    public $status;

    /**
     * @description 模板ID
     *
     * @example 67
     *
     * @var int
     */
    public $templateId;

    /**
     * @description 模板名称
     *
     * @example 示例值示例值示例值
     *
     * @var string
     */
    public $templateName;

    /**
     * @description 模板类型
     *
     * @example 56
     *
     * @var int
     */
    public $templateType;
    protected $_name = [
        'content'        => 'Content',
        'createTime'     => 'CreateTime',
        'properties'     => 'Properties',
        'shortUrlTaskId' => 'ShortUrlTaskId',
        'sign'           => 'Sign',
        'smsType'        => 'SmsType',
        'status'         => 'Status',
        'templateId'     => 'TemplateId',
        'templateName'   => 'TemplateName',
        'templateType'   => 'TemplateType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->shortUrlTaskId) {
            $res['ShortUrlTaskId'] = $this->shortUrlTaskId;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->smsType) {
            $res['SmsType'] = $this->smsType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['ShortUrlTaskId'])) {
            $model->shortUrlTaskId = $map['ShortUrlTaskId'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['SmsType'])) {
            $model->smsType = $map['SmsType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        return $model;
    }
}
