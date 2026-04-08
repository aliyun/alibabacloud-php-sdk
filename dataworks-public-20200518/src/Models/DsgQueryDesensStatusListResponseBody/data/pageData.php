<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\DsgQueryDesensStatusListResponseBody\data;

use AlibabaCloud\Dara\Model;

class pageData extends Model
{
    /**
     * @var int
     */
    public $desensStatus;

    /**
     * @var string
     */
    public $handleSpace;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $workspaceIdentifier;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'desensStatus' => 'DesensStatus',
        'handleSpace' => 'HandleSpace',
        'id' => 'Id',
        'workspaceIdentifier' => 'WorkspaceIdentifier',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desensStatus) {
            $res['DesensStatus'] = $this->desensStatus;
        }

        if (null !== $this->handleSpace) {
            $res['HandleSpace'] = $this->handleSpace;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->workspaceIdentifier) {
            $res['WorkspaceIdentifier'] = $this->workspaceIdentifier;
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
        if (isset($map['DesensStatus'])) {
            $model->desensStatus = $map['DesensStatus'];
        }

        if (isset($map['HandleSpace'])) {
            $model->handleSpace = $map['HandleSpace'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['WorkspaceIdentifier'])) {
            $model->workspaceIdentifier = $map['WorkspaceIdentifier'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
