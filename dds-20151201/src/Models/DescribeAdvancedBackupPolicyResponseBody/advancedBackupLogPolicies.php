<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeAdvancedBackupPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class advancedBackupLogPolicies extends Model
{
    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $destType;

    /**
     * @var int
     */
    public $enableLogBackup;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var string
     */
    public $retentionPeriod;

    /**
     * @var string
     */
    public $retentionType;

    /**
     * @var string
     */
    public $srcRegion;

    /**
     * @var string
     */
    public $srcType;
    protected $_name = [
        'destRegion' => 'DestRegion',
        'destType' => 'DestType',
        'enableLogBackup' => 'EnableLogBackup',
        'policyId' => 'PolicyId',
        'retentionPeriod' => 'RetentionPeriod',
        'retentionType' => 'RetentionType',
        'srcRegion' => 'SrcRegion',
        'srcType' => 'SrcType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        if (null !== $this->enableLogBackup) {
            $res['EnableLogBackup'] = $this->enableLogBackup;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->retentionPeriod) {
            $res['RetentionPeriod'] = $this->retentionPeriod;
        }

        if (null !== $this->retentionType) {
            $res['RetentionType'] = $this->retentionType;
        }

        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
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
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        if (isset($map['EnableLogBackup'])) {
            $model->enableLogBackup = $map['EnableLogBackup'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RetentionPeriod'])) {
            $model->retentionPeriod = $map['RetentionPeriod'];
        }

        if (isset($map['RetentionType'])) {
            $model->retentionType = $map['RetentionType'];
        }

        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }

        return $model;
    }
}
