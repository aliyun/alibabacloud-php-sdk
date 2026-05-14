<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;

class AIUsageLimitPolicy extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $limitPolicyId;

    /**
     * @var int
     */
    public $limitValue;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $resetPeriod;

    /**
     * @var string[]
     */
    public $serviceIds;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $userGroupIds;
    protected $_name = [
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'limitPolicyId' => 'LimitPolicyId',
        'limitValue' => 'LimitValue',
        'metricType' => 'MetricType',
        'name' => 'Name',
        'priority' => 'Priority',
        'resetPeriod' => 'ResetPeriod',
        'serviceIds' => 'ServiceIds',
        'status' => 'Status',
        'userGroupIds' => 'UserGroupIds',
    ];

    public function validate()
    {
        if (\is_array($this->serviceIds)) {
            Model::validateArray($this->serviceIds);
        }
        if (\is_array($this->userGroupIds)) {
            Model::validateArray($this->userGroupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->limitPolicyId) {
            $res['LimitPolicyId'] = $this->limitPolicyId;
        }

        if (null !== $this->limitValue) {
            $res['LimitValue'] = $this->limitValue;
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->resetPeriod) {
            $res['ResetPeriod'] = $this->resetPeriod;
        }

        if (null !== $this->serviceIds) {
            if (\is_array($this->serviceIds)) {
                $res['ServiceIds'] = [];
                $n1 = 0;
                foreach ($this->serviceIds as $item1) {
                    $res['ServiceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->userGroupIds) {
            if (\is_array($this->userGroupIds)) {
                $res['UserGroupIds'] = [];
                $n1 = 0;
                foreach ($this->userGroupIds as $item1) {
                    $res['UserGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['LimitPolicyId'])) {
            $model->limitPolicyId = $map['LimitPolicyId'];
        }

        if (isset($map['LimitValue'])) {
            $model->limitValue = $map['LimitValue'];
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['ResetPeriod'])) {
            $model->resetPeriod = $map['ResetPeriod'];
        }

        if (isset($map['ServiceIds'])) {
            if (!empty($map['ServiceIds'])) {
                $model->serviceIds = [];
                $n1 = 0;
                foreach ($map['ServiceIds'] as $item1) {
                    $model->serviceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UserGroupIds'])) {
            if (!empty($map['UserGroupIds'])) {
                $model->userGroupIds = [];
                $n1 = 0;
                foreach ($map['UserGroupIds'] as $item1) {
                    $model->userGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
