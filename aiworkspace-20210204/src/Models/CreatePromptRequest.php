<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class CreatePromptRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

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
    public $promptName;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'description' => 'Description',
        'frameworkContent' => 'FrameworkContent',
        'frameworkType' => 'FrameworkType',
        'promptName' => 'PromptName',
        'workspaceId' => 'WorkspaceId',
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

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->frameworkContent) {
            $res['FrameworkContent'] = $this->frameworkContent;
        }

        if (null !== $this->frameworkType) {
            $res['FrameworkType'] = $this->frameworkType;
        }

        if (null !== $this->promptName) {
            $res['PromptName'] = $this->promptName;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FrameworkContent'])) {
            $model->frameworkContent = $map['FrameworkContent'];
        }

        if (isset($map['FrameworkType'])) {
            $model->frameworkType = $map['FrameworkType'];
        }

        if (isset($map['PromptName'])) {
            $model->promptName = $map['PromptName'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
