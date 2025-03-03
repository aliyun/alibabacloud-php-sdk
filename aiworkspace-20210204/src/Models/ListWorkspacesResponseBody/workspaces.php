<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListWorkspacesResponseBody;

use AlibabaCloud\Dara\Model;

class workspaces extends Model
{
    /**
     * @var string[]
     */
    public $adminNames;
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string[]
     */
    public $envTypes;
    /**
     * @var mixed[]
     */
    public $extraInfos;
    /**
     * @var string
     */
    public $gmtCreateTime;
    /**
     * @var string
     */
    public $gmtModifiedTime;
    /**
     * @var bool
     */
    public $isDefault;
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
    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'adminNames'      => 'AdminNames',
        'creator'         => 'Creator',
        'description'     => 'Description',
        'envTypes'        => 'EnvTypes',
        'extraInfos'      => 'ExtraInfos',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'isDefault'       => 'IsDefault',
        'status'          => 'Status',
        'workspaceId'     => 'WorkspaceId',
        'workspaceName'   => 'WorkspaceName',
        'resourceGroupId' => 'resourceGroupId',
    ];

    public function validate()
    {
        if (\is_array($this->adminNames)) {
            Model::validateArray($this->adminNames);
        }
        if (\is_array($this->envTypes)) {
            Model::validateArray($this->envTypes);
        }
        if (\is_array($this->extraInfos)) {
            Model::validateArray($this->extraInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminNames) {
            if (\is_array($this->adminNames)) {
                $res['AdminNames'] = [];
                $n1                = 0;
                foreach ($this->adminNames as $item1) {
                    $res['AdminNames'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->envTypes) {
            if (\is_array($this->envTypes)) {
                $res['EnvTypes'] = [];
                $n1              = 0;
                foreach ($this->envTypes as $item1) {
                    $res['EnvTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->extraInfos) {
            if (\is_array($this->extraInfos)) {
                $res['ExtraInfos'] = [];
                foreach ($this->extraInfos as $key1 => $value1) {
                    $res['ExtraInfos'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
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

        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['AdminNames'])) {
            if (!empty($map['AdminNames'])) {
                $model->adminNames = [];
                $n1                = 0;
                foreach ($map['AdminNames'] as $item1) {
                    $model->adminNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EnvTypes'])) {
            if (!empty($map['EnvTypes'])) {
                $model->envTypes = [];
                $n1              = 0;
                foreach ($map['EnvTypes'] as $item1) {
                    $model->envTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExtraInfos'])) {
            if (!empty($map['ExtraInfos'])) {
                $model->extraInfos = [];
                foreach ($map['ExtraInfos'] as $key1 => $value1) {
                    $model->extraInfos[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
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

        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }

        return $model;
    }
}
