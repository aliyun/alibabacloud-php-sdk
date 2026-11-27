<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListMediaConvertTemplateGroupResponseBody;

use AlibabaCloud\Dara\Model;

class templateGroupList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $groupConfig;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $templateType;

    /**
     * @var string
     */
    public $transcodeTemplateGroupId;
    protected $_name = [
        'appId' => 'AppId',
        'creationTime' => 'CreationTime',
        'groupConfig' => 'GroupConfig',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'templateType' => 'TemplateType',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->groupConfig) {
            $res['GroupConfig'] = $this->groupConfig;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }

        if (null !== $this->transcodeTemplateGroupId) {
            $res['TranscodeTemplateGroupId'] = $this->transcodeTemplateGroupId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['GroupConfig'])) {
            $model->groupConfig = $map['GroupConfig'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }

        if (isset($map['TranscodeTemplateGroupId'])) {
            $model->transcodeTemplateGroupId = $map['TranscodeTemplateGroupId'];
        }

        return $model;
    }
}
