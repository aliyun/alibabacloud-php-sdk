<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponseBody;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponseBody\data\templatePipelineParam;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Creation time
     *
     * @example 2024-11-29 02:16:35
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Primary account UID
     *
     * @example 178154411231232
     *
     * @var int
     */
    public $creatorUid;

    /**
     * @description Whether it is deleted
     *
     * @example 0
     *
     * @var int
     */
    public $isDelete;

    /**
     * @description Privacy level
     *
     * @example private
     *
     * @var string
     */
    public $privacyLevel;

    /**
     * @description Template description
     *
     * @example test
     *
     * @var string
     */
    public $templateDescription;

    /**
     * @description Template ID
     *
     * @example 17815441
     *
     * @var int
     */
    public $templateId;

    /**
     * @description Template name
     *
     * @example test
     *
     * @var string
     */
    public $templateName;

    /**
     * @description Template pipeline
     *
     * @var templatePipelineParam[]
     */
    public $templatePipelineParam;

    /**
     * @description Update time
     *
     * @example 2024-11-29 02:16:35
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description Version ID
     *
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
