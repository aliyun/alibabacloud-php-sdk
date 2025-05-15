<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class Prompt extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $frameworkContent;

    /**
     * @var string
     */
    public $frameworkType;

    /**
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $promptId;

    /**
     * @var string
     */
    public $promptName;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'frameworkContent' => 'FrameworkContent',
        'frameworkType' => 'FrameworkType',
        'modifyTime' => 'ModifyTime',
        'promptId' => 'PromptId',
        'promptName' => 'PromptName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->frameworkContent) {
            $res['FrameworkContent'] = $this->frameworkContent;
        }

        if (null !== $this->frameworkType) {
            $res['FrameworkType'] = $this->frameworkType;
        }

        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        if (null !== $this->promptId) {
            $res['PromptId'] = $this->promptId;
        }

        if (null !== $this->promptName) {
            $res['PromptName'] = $this->promptName;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FrameworkContent'])) {
            $model->frameworkContent = $map['FrameworkContent'];
        }

        if (isset($map['FrameworkType'])) {
            $model->frameworkType = $map['FrameworkType'];
        }

        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        if (isset($map['PromptId'])) {
            $model->promptId = $map['PromptId'];
        }

        if (isset($map['PromptName'])) {
            $model->promptName = $map['PromptName'];
        }

        return $model;
    }
}
