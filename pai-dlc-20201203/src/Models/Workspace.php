<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class Workspace extends Model
{
    /**
     * @example ken
     *
     * @var string
     */
    public $creator;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:01Z
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @var Member[]
     */
    public $members;

    /**
     * @var Quota[]
     */
    public $quotas;

    /**
     * @var Resources
     */
    public $totalResources;

    /**
     * @var Member[]
     */
    public $workspaceAdmins;

    /**
     * @example ws-20210126170216-mtl37ge7gkvdz
     *
     * @var string
     */
    public $workspaceId;

    /**
     * @example dlc-workspace
     *
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'creator'         => 'Creator',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifyTime'   => 'GmtModifyTime',
        'members'         => 'Members',
        'quotas'          => 'Quotas',
        'totalResources'  => 'TotalResources',
        'workspaceAdmins' => 'WorkspaceAdmins',
        'workspaceId'     => 'WorkspaceId',
        'workspaceName'   => 'WorkspaceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->members) {
            $res['Members'] = [];
            if (null !== $this->members && \is_array($this->members)) {
                $n = 0;
                foreach ($this->members as $item) {
                    $res['Members'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->quotas) {
            $res['Quotas'] = [];
            if (null !== $this->quotas && \is_array($this->quotas)) {
                $n = 0;
                foreach ($this->quotas as $item) {
                    $res['Quotas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->workspaceAdmins) {
            $res['WorkspaceAdmins'] = [];
            if (null !== $this->workspaceAdmins && \is_array($this->workspaceAdmins)) {
                $n = 0;
                foreach ($this->workspaceAdmins as $item) {
                    $res['WorkspaceAdmins'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }
        if (null !== $this->workspaceName) {
            $res['WorkspaceName'] = $this->workspaceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Workspace
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = [];
                $n              = 0;
                foreach ($map['Members'] as $item) {
                    $model->members[$n++] = null !== $item ? Member::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n             = 0;
                foreach ($map['Quotas'] as $item) {
                    $model->quotas[$n++] = null !== $item ? Quota::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = Resources::fromMap($map['TotalResources']);
        }
        if (isset($map['WorkspaceAdmins'])) {
            if (!empty($map['WorkspaceAdmins'])) {
                $model->workspaceAdmins = [];
                $n                      = 0;
                foreach ($map['WorkspaceAdmins'] as $item) {
                    $model->workspaceAdmins[$n++] = null !== $item ? Member::fromMap($item) : $item;
                }
            }
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
