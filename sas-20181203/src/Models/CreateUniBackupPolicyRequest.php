<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class CreateUniBackupPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;
    /**
     * @var string
     */
    public $accountPassword;
    /**
     * @var string
     */
    public $databaseAddByUser;
    /**
     * @var string
     */
    public $databaseType;
    /**
     * @var mixed[]
     */
    public $fullPlan;
    /**
     * @var mixed[]
     */
    public $incPlan;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $policyName;
    /**
     * @var int
     */
    public $retention;
    /**
     * @var int
     */
    public $speedLimiter;
    /**
     * @var string
     */
    public $uniRegionId;
    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'accountName'       => 'AccountName',
        'accountPassword'   => 'AccountPassword',
        'databaseAddByUser' => 'DatabaseAddByUser',
        'databaseType'      => 'DatabaseType',
        'fullPlan'          => 'FullPlan',
        'incPlan'           => 'IncPlan',
        'instanceId'        => 'InstanceId',
        'policyName'        => 'PolicyName',
        'retention'         => 'Retention',
        'speedLimiter'      => 'SpeedLimiter',
        'uniRegionId'       => 'UniRegionId',
        'uuid'              => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->fullPlan)) {
            Model::validateArray($this->fullPlan);
        }
        if (\is_array($this->incPlan)) {
            Model::validateArray($this->incPlan);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }

        if (null !== $this->databaseAddByUser) {
            $res['DatabaseAddByUser'] = $this->databaseAddByUser;
        }

        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }

        if (null !== $this->fullPlan) {
            if (\is_array($this->fullPlan)) {
                $res['FullPlan'] = [];
                foreach ($this->fullPlan as $key1 => $value1) {
                    $res['FullPlan'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->incPlan) {
            if (\is_array($this->incPlan)) {
                $res['IncPlan'] = [];
                foreach ($this->incPlan as $key1 => $value1) {
                    $res['IncPlan'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }

        if (null !== $this->speedLimiter) {
            $res['SpeedLimiter'] = $this->speedLimiter;
        }

        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }

        if (isset($map['DatabaseAddByUser'])) {
            $model->databaseAddByUser = $map['DatabaseAddByUser'];
        }

        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }

        if (isset($map['FullPlan'])) {
            if (!empty($map['FullPlan'])) {
                $model->fullPlan = [];
                foreach ($map['FullPlan'] as $key1 => $value1) {
                    $model->fullPlan[$key1] = $value1;
                }
            }
        }

        if (isset($map['IncPlan'])) {
            if (!empty($map['IncPlan'])) {
                $model->incPlan = [];
                foreach ($map['IncPlan'] as $key1 => $value1) {
                    $model->incPlan[$key1] = $value1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }

        if (isset($map['SpeedLimiter'])) {
            $model->speedLimiter = $map['SpeedLimiter'];
        }

        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
