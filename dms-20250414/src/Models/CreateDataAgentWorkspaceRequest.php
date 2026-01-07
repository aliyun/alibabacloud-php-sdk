<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class CreateDataAgentWorkspaceRequest extends Model
{
    /**
     * @var string
     */
    public $DMSUnit;

    /**
     * @var string
     */
    public $workspaceDesc;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'DMSUnit' => 'DMSUnit',
        'workspaceDesc' => 'WorkspaceDesc',
        'workspaceName' => 'WorkspaceName',
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

        if (null !== $this->workspaceDesc) {
            $res['WorkspaceDesc'] = $this->workspaceDesc;
        }

        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
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

        if (isset($map['WorkspaceDesc'])) {
            $model->workspaceDesc = $map['WorkspaceDesc'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
