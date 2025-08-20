<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackInstanceResponseBody\stackInstance\parameterOverrides;

class stackInstance extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $driftDetectionTime;

    /**
     * @var mixed[][]
     */
    public $outputs;

    /**
     * @var parameterOverrides[]
     */
    public $parameterOverrides;

    /**
     * @var string
     */
    public $rdFolderId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackDriftStatus;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $stackId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusReason;
    protected $_name = [
        'accountId' => 'AccountId',
        'driftDetectionTime' => 'DriftDetectionTime',
        'outputs' => 'Outputs',
        'parameterOverrides' => 'ParameterOverrides',
        'rdFolderId' => 'RdFolderId',
        'regionId' => 'RegionId',
        'stackDriftStatus' => 'StackDriftStatus',
        'stackGroupId' => 'StackGroupId',
        'stackGroupName' => 'StackGroupName',
        'stackId' => 'StackId',
        'status' => 'Status',
        'statusReason' => 'StatusReason',
    ];

    public function validate()
    {
        if (\is_array($this->outputs)) {
            Model::validateArray($this->outputs);
        }
        if (\is_array($this->parameterOverrides)) {
            Model::validateArray($this->parameterOverrides);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->driftDetectionTime) {
            $res['DriftDetectionTime'] = $this->driftDetectionTime;
        }

        if (null !== $this->outputs) {
            if (\is_array($this->outputs)) {
                $res['Outputs'] = [];
                $n1 = 0;
                foreach ($this->outputs as $item1) {
                    if (\is_array($item1)) {
                        $res['Outputs'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Outputs'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->parameterOverrides) {
            if (\is_array($this->parameterOverrides)) {
                $res['ParameterOverrides'] = [];
                $n1 = 0;
                foreach ($this->parameterOverrides as $item1) {
                    $res['ParameterOverrides'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rdFolderId) {
            $res['RdFolderId'] = $this->rdFolderId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stackDriftStatus) {
            $res['StackDriftStatus'] = $this->stackDriftStatus;
        }

        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusReason) {
            $res['StatusReason'] = $this->statusReason;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['DriftDetectionTime'])) {
            $model->driftDetectionTime = $map['DriftDetectionTime'];
        }

        if (isset($map['Outputs'])) {
            if (!empty($map['Outputs'])) {
                $model->outputs = [];
                $n1 = 0;
                foreach ($map['Outputs'] as $item1) {
                    if (!empty($item1)) {
                        $model->outputs[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->outputs[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['ParameterOverrides'])) {
            if (!empty($map['ParameterOverrides'])) {
                $model->parameterOverrides = [];
                $n1 = 0;
                foreach ($map['ParameterOverrides'] as $item1) {
                    $model->parameterOverrides[$n1] = parameterOverrides::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RdFolderId'])) {
            $model->rdFolderId = $map['RdFolderId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StackDriftStatus'])) {
            $model->stackDriftStatus = $map['StackDriftStatus'];
        }

        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusReason'])) {
            $model->statusReason = $map['StatusReason'];
        }

        return $model;
    }
}
