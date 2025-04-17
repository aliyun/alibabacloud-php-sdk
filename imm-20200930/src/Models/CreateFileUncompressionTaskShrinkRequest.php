<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateFileUncompressionTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $selectedFilesShrink;

    /**
     * @var string
     */
    public $sourceURI;

    /**
     * @var string
     */
    public $targetURI;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'notificationShrink' => 'Notification',
        'password' => 'Password',
        'projectName' => 'ProjectName',
        'selectedFilesShrink' => 'SelectedFiles',
        'sourceURI' => 'SourceURI',
        'targetURI' => 'TargetURI',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }

        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->selectedFilesShrink) {
            $res['SelectedFiles'] = $this->selectedFilesShrink;
        }

        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }

        if (null !== $this->targetURI) {
            $res['TargetURI'] = $this->targetURI;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }

        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SelectedFiles'])) {
            $model->selectedFilesShrink = $map['SelectedFiles'];
        }

        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }

        if (isset($map['TargetURI'])) {
            $model->targetURI = $map['TargetURI'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
