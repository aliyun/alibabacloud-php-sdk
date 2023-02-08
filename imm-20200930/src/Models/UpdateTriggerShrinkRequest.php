<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class UpdateTriggerShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $actionsShrink;

    /**
     * @example trigger-9f72636a-0f0c-4baf-ae78-38b27b******
     *
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $inputShrink;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example {"test": "val1"}
     *
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'actionsShrink'      => 'Actions',
        'id'                 => 'Id',
        'inputShrink'        => 'Input',
        'notificationShrink' => 'Notification',
        'projectName'        => 'ProjectName',
        'tagsShrink'         => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionsShrink) {
            $res['Actions'] = $this->actionsShrink;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->inputShrink) {
            $res['Input'] = $this->inputShrink;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTriggerShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Actions'])) {
            $model->actionsShrink = $map['Actions'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Input'])) {
            $model->inputShrink = $map['Input'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
