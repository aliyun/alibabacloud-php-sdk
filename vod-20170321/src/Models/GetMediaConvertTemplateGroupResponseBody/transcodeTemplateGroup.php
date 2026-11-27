<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaConvertTemplateGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaConvertTemplateGroupResponseBody\transcodeTemplateGroup\transcodeTemplateList;

class transcodeTemplateGroup extends Model
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

    /**
     * @var transcodeTemplateList[]
     */
    public $transcodeTemplateList;
    protected $_name = [
        'appId' => 'AppId',
        'creationTime' => 'CreationTime',
        'groupConfig' => 'GroupConfig',
        'modifyTime' => 'ModifyTime',
        'name' => 'Name',
        'templateType' => 'TemplateType',
        'transcodeTemplateGroupId' => 'TranscodeTemplateGroupId',
        'transcodeTemplateList' => 'TranscodeTemplateList',
    ];

    public function validate()
    {
        if (\is_array($this->transcodeTemplateList)) {
            Model::validateArray($this->transcodeTemplateList);
        }
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

        if (null !== $this->transcodeTemplateList) {
            if (\is_array($this->transcodeTemplateList)) {
                $res['TranscodeTemplateList'] = [];
                $n1 = 0;
                foreach ($this->transcodeTemplateList as $item1) {
                    $res['TranscodeTemplateList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['TranscodeTemplateList'])) {
            if (!empty($map['TranscodeTemplateList'])) {
                $model->transcodeTemplateList = [];
                $n1 = 0;
                foreach ($map['TranscodeTemplateList'] as $item1) {
                    $model->transcodeTemplateList[$n1] = transcodeTemplateList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
