<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\CreateExperimentPlanTemplateResponseBody\data\templatePipelineParam;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2024-11-19T02:01:05Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 12312312312312
     *
     * @var int
     */
    public $creatorUid;

    /**
     * @example 0
     *
     * @var int
     */
    public $isDelete;

    /**
     * @example private
     *
     * @var string
     */
    public $privacyLevel;

    /**
     * @var string
     */
    public $templateDescription;

    /**
     * @example 17615126
     *
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var templatePipelineParam[]
     */
    public $templatePipelineParam;

    /**
     * @example 2023-10-16T01:58Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $versionId;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'creatorUid'            => 'CreatorUid',
        'isDelete'              => 'IsDelete',
        'privacyLevel'          => 'PrivacyLevel',
        'templateDescription'   => 'TemplateDescription',
        'templateId'            => 'TemplateId',
        'templateName'          => 'TemplateName',
        'templatePipelineParam' => 'TemplatePipelineParam',
        'updateTime'            => 'UpdateTime',
        'versionId'             => 'VersionId',
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
        if (null !== $this->creatorUid) {
            $res['CreatorUid'] = $this->creatorUid;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->privacyLevel) {
            $res['PrivacyLevel'] = $this->privacyLevel;
        }
        if (null !== $this->templateDescription) {
            $res['TemplateDescription'] = $this->templateDescription;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templatePipelineParam) {
            $res['TemplatePipelineParam'] = [];
            if (null !== $this->templatePipelineParam && \is_array($this->templatePipelineParam)) {
                $n = 0;
                foreach ($this->templatePipelineParam as $item) {
                    $res['TemplatePipelineParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreatorUid'])) {
            $model->creatorUid = $map['CreatorUid'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['PrivacyLevel'])) {
            $model->privacyLevel = $map['PrivacyLevel'];
        }
        if (isset($map['TemplateDescription'])) {
            $model->templateDescription = $map['TemplateDescription'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplatePipelineParam'])) {
            if (!empty($map['TemplatePipelineParam'])) {
                $model->templatePipelineParam = [];
                $n                            = 0;
                foreach ($map['TemplatePipelineParam'] as $item) {
                    $model->templatePipelineParam[$n++] = null !== $item ? templatePipelineParam::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
