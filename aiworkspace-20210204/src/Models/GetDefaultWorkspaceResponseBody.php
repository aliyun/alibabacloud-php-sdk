<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponseBody\conditions;
use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\GetDefaultWorkspaceResponseBody\owner;

class GetDefaultWorkspaceResponseBody extends Model
{
    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $displayName;

    /**
     * @var string[]
     */
    public $envTypes;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var owner
     */
    public $owner;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'conditions' => 'Conditions',
        'creator' => 'Creator',
        'description' => 'Description',
        'displayName' => 'DisplayName',
        'envTypes' => 'EnvTypes',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'owner' => 'Owner',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (\is_array($this->envTypes)) {
            Model::validateArray($this->envTypes);
        }
        if (null !== $this->owner) {
            $this->owner->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }

        if (null !== $this->envTypes) {
            if (\is_array($this->envTypes)) {
                $res['EnvTypes'] = [];
                $n1 = 0;
                foreach ($this->envTypes as $item1) {
                    $res['EnvTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->owner) {
            $res['Owner'] = null !== $this->owner ? $this->owner->toArray($noStream) : $this->owner;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }

        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = [];
                $n1 = 0;
                foreach ($map['EnvTypes'] as $item1) {
                    $model->envTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Owner'])) {
            $model->owner = owner::fromMap($map['Owner']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        if (isset($map['WorkspaceName'])) {
            $model->workspaceName = $map['WorkspaceName'];
        }

        return $model;
    }
}
