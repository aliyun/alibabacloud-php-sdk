<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class Workspace extends Model
{
    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
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
     * @var string
     */
    public $workspaceId;

    /**
     * @var string
     */
    public $workspaceName;
    protected $_name = [
        'creator' => 'Creator',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifyTime' => 'GmtModifyTime',
        'members' => 'Members',
        'quotas' => 'Quotas',
        'totalResources' => 'TotalResources',
        'workspaceAdmins' => 'WorkspaceAdmins',
        'workspaceId' => 'WorkspaceId',
        'workspaceName' => 'WorkspaceName',
    ];

    public function validate()
    {
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        if (null !== $this->totalResources) {
            $this->totalResources->validate();
        }
        if (\is_array($this->workspaceAdmins)) {
            Model::validateArray($this->workspaceAdmins);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->members)) {
                $res['Members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['Members'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['Quotas'] = [];
                $n1 = 0;
                foreach ($this->quotas as $item1) {
                    $res['Quotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toArray($noStream) : $this->totalResources;
        }

        if (null !== $this->workspaceAdmins) {
            if (\is_array($this->workspaceAdmins)) {
                $res['WorkspaceAdmins'] = [];
                $n1 = 0;
                foreach ($this->workspaceAdmins as $item1) {
                    $res['WorkspaceAdmins'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['Members'] as $item1) {
                    $model->members[$n1] = Member::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n1 = 0;
                foreach ($map['Quotas'] as $item1) {
                    $model->quotas[$n1] = Quota::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalResources'])) {
            $model->totalResources = Resources::fromMap($map['TotalResources']);
        }

        if (isset($map['WorkspaceAdmins'])) {
            if (!empty($map['WorkspaceAdmins'])) {
                $model->workspaceAdmins = [];
                $n1 = 0;
                foreach ($map['WorkspaceAdmins'] as $item1) {
                    $model->workspaceAdmins[$n1] = Member::fromMap($item1);
                    ++$n1;
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
