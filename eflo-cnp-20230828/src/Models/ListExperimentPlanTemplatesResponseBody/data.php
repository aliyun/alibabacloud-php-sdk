<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ListExperimentPlanTemplatesResponseBody\data\templatePipelineParam;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $creatorUid;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var string
     */
    public $privacyLevel;

    /**
     * @var int
     */
    public $templateCode;

    /**
     * @var string
     */
    public $templateDescription;

    /**
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
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'creatorUid' => 'CreatorUid',
        'isDelete' => 'IsDelete',
        'privacyLevel' => 'PrivacyLevel',
        'templateCode' => 'TemplateCode',
        'templateDescription' => 'TemplateDescription',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'templatePipelineParam' => 'TemplatePipelineParam',
        'updateTime' => 'UpdateTime',
        'versionId' => 'VersionId',
    ];

    public function validate()
    {
        if (\is_array($this->templatePipelineParam)) {
            Model::validateArray($this->templatePipelineParam);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->templateCode) {
            $res['TemplateCode'] = $this->templateCode;
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
            if (\is_array($this->templatePipelineParam)) {
                $res['TemplatePipelineParam'] = [];
                $n1 = 0;
                foreach ($this->templatePipelineParam as $item1) {
                    $res['TemplatePipelineParam'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['TemplateCode'])) {
            $model->templateCode = $map['TemplateCode'];
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
                $n1 = 0;
                foreach ($map['TemplatePipelineParam'] as $item1) {
                    $model->templatePipelineParam[$n1++] = templatePipelineParam::fromMap($item1);
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
