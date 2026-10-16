<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentIdentity\V20250901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderSyncScopeResponseBody\selectedDepartments;
use AlibabaCloud\SDK\AgentIdentity\V20250901\Models\GetIdentityProviderSyncScopeResponseBody\syncScope;

class GetIdentityProviderSyncScopeResponseBody extends Model
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
     * @var string
     */
    public $requestId;

    /**
     * @var selectedDepartments[]
     */
    public $selectedDepartments;

    /**
     * @var syncScope
     */
    public $syncScope;
    protected $_name = [
        'estimateStatus' => 'EstimateStatus',
        'estimatedUserCount' => 'EstimatedUserCount',
        'expandedDepartmentCount' => 'ExpandedDepartmentCount',
        'requestId' => 'RequestId',
        'selectedDepartments' => 'SelectedDepartments',
        'syncScope' => 'SyncScope',
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
            $res['EstimateStatus'] = $this->estimateStatus;
        }

        if (null !== $this->estimatedUserCount) {
            $res['EstimatedUserCount'] = $this->estimatedUserCount;
        }

        if (null !== $this->expandedDepartmentCount) {
            $res['ExpandedDepartmentCount'] = $this->expandedDepartmentCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->selectedDepartments) {
            if (\is_array($this->selectedDepartments)) {
                $res['SelectedDepartments'] = [];
                $n1 = 0;
                foreach ($this->selectedDepartments as $item1) {
                    $res['SelectedDepartments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->syncScope) {
            $res['SyncScope'] = null !== $this->syncScope ? $this->syncScope->toArray($noStream) : $this->syncScope;
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
        if (isset($map['EstimateStatus'])) {
            $model->estimateStatus = $map['EstimateStatus'];
        }

        if (isset($map['EstimatedUserCount'])) {
            $model->estimatedUserCount = $map['EstimatedUserCount'];
        }

        if (isset($map['ExpandedDepartmentCount'])) {
            $model->expandedDepartmentCount = $map['ExpandedDepartmentCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SelectedDepartments'])) {
            if (!empty($map['SelectedDepartments'])) {
                $model->selectedDepartments = [];
                $n1 = 0;
                foreach ($map['SelectedDepartments'] as $item1) {
                    $model->selectedDepartments[$n1] = selectedDepartments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SyncScope'])) {
            $model->syncScope = syncScope::fromMap($map['SyncScope']);
        }

        return $model;
    }
}
