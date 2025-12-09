<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateDataAgentSessionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $file;

    /**
     * @var string
     */
    public $sessionConfigShrink;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'DMSUnit' => 'DMSUnit',
        'file' => 'File',
        'sessionConfigShrink' => 'SessionConfig',
        'title' => 'Title',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DMSUnit) {
            $res['DMSUnit'] = $this->DMSUnit;
        }

        if (null !== $this->file) {
            $res['File'] = $this->file;
        }

        if (null !== $this->sessionConfigShrink) {
            $res['SessionConfig'] = $this->sessionConfigShrink;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['DMSUnit'])) {
            $model->DMSUnit = $map['DMSUnit'];
        }

        if (isset($map['File'])) {
            $model->file = $map['File'];
        }

        if (isset($map['SessionConfig'])) {
            $model->sessionConfigShrink = $map['SessionConfig'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
