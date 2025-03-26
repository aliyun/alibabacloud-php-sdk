<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyAutoSnapshotPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $cronExpression;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $retentionDays;
    protected $_name = [
        'cronExpression' => 'CronExpression',
        'policyId' => 'PolicyId',
        'policyName' => 'PolicyName',
        'regionId' => 'RegionId',
        'retentionDays' => 'RetentionDays',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cronExpression) {
            $res['CronExpression'] = $this->cronExpression;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->retentionDays) {
            $res['RetentionDays'] = $this->retentionDays;
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
        if (isset($map['CronExpression'])) {
            $model->cronExpression = $map['CronExpression'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RetentionDays'])) {
            $model->retentionDays = $map['RetentionDays'];
        }

        return $model;
    }
}
