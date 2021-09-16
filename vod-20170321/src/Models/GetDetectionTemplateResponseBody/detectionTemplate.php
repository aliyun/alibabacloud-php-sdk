<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetDetectionTemplateResponseBody;

use AlibabaCloud\Tea\Model;

class detectionTemplate extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $period;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'createTime'   => 'CreateTime',
        'userId'       => 'UserId',
        'templateName' => 'TemplateName',
        'period'       => 'Period',
        'platform'     => 'Platform',
        'templateId'   => 'TemplateId',
        'modifyTime'   => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detectionTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
