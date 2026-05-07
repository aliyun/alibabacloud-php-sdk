<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class RegisterMediaRequest extends Model
{
    /**
     * @var bool
     */
    public $enableFirstFrameCover;

    /**
     * @var bool
     */
    public $generateThumbnail;

    /**
     * @var string
     */
    public $registerMetadatas;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'enableFirstFrameCover' => 'EnableFirstFrameCover',
        'generateThumbnail' => 'GenerateThumbnail',
        'registerMetadatas' => 'RegisterMetadatas',
        'templateGroupId' => 'TemplateGroupId',
        'userData' => 'UserData',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableFirstFrameCover) {
            $res['EnableFirstFrameCover'] = $this->enableFirstFrameCover;
        }

        if (null !== $this->generateThumbnail) {
            $res['GenerateThumbnail'] = $this->generateThumbnail;
        }

        if (null !== $this->registerMetadatas) {
            $res['RegisterMetadatas'] = $this->registerMetadatas;
        }

        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['EnableFirstFrameCover'])) {
            $model->enableFirstFrameCover = $map['EnableFirstFrameCover'];
        }

        if (isset($map['GenerateThumbnail'])) {
            $model->generateThumbnail = $map['GenerateThumbnail'];
        }

        if (isset($map['RegisterMetadatas'])) {
            $model->registerMetadatas = $map['RegisterMetadatas'];
        }

        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
