<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeResponseBody\data\selectedDepartments;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\GetIdentityProviderSyncScopeResponseBody\data\syncScope;

class data extends Model
{
    /**
     * @var string
     */
    public $estimateStatus;

    /**
     * @var int
     */
    public $estimatedUserCount;

    /**
     * @var int
     */
    public $expandedDepartmentCount;

    /**
     * @var selectedDepartments[]
     */
    public $selectedDepartments;

    /**
     * @var syncScope
     */
    public $syncScope;
    protected $_name = [
        'estimateStatus' => 'estimateStatus',
        'estimatedUserCount' => 'estimatedUserCount',
        'expandedDepartmentCount' => 'expandedDepartmentCount',
        'selectedDepartments' => 'selectedDepartments',
        'syncScope' => 'syncScope',
    ];

    public function validate()
    {
        if (\is_array($this->selectedDepartments)) {
            Model::validateArray($this->selectedDepartments);
        }
        if (null !== $this->syncScope) {
            $this->syncScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->estimateStatus) {
            $res['estimateStatus'] = $this->estimateStatus;
        }

        if (null !== $this->estimatedUserCount) {
            $res['estimatedUserCount'] = $this->estimatedUserCount;
        }

        if (null !== $this->expandedDepartmentCount) {
            $res['expandedDepartmentCount'] = $this->expandedDepartmentCount;
        }

        if (null !== $this->selectedDepartments) {
            if (\is_array($this->selectedDepartments)) {
                $res['selectedDepartments'] = [];
                $n1 = 0;
                foreach ($this->selectedDepartments as $item1) {
                    $res['selectedDepartments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->syncScope) {
            $res['syncScope'] = null !== $this->syncScope ? $this->syncScope->toArray($noStream) : $this->syncScope;
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
        if (isset($map['estimateStatus'])) {
            $model->estimateStatus = $map['estimateStatus'];
        }

        if (isset($map['estimatedUserCount'])) {
            $model->estimatedUserCount = $map['estimatedUserCount'];
        }

        if (isset($map['expandedDepartmentCount'])) {
            $model->expandedDepartmentCount = $map['expandedDepartmentCount'];
        }

        if (isset($map['selectedDepartments'])) {
            if (!empty($map['selectedDepartments'])) {
                $model->selectedDepartments = [];
                $n1 = 0;
                foreach ($map['selectedDepartments'] as $item1) {
                    $model->selectedDepartments[$n1] = selectedDepartments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['syncScope'])) {
            $model->syncScope = syncScope::fromMap($map['syncScope']);
        }

        return $model;
    }
}
