<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data;

use AlibabaCloud\Dara\Model;

class advanceLogPolicies extends Model
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
    public $filterKey;

    /**
     * @var string
     */
    public $filterType;

    /**
     * @var string
     */
    public $filterValue;

    /**
     * @var string
     */
    public $logRetentionType;

    /**
     * @var string
     */
    public $logRetentionValue;

    /**
     * @var string
     */
    public $policyId;

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
        'filterKey' => 'FilterKey',
        'filterType' => 'FilterType',
        'filterValue' => 'FilterValue',
        'logRetentionType' => 'LogRetentionType',
        'logRetentionValue' => 'LogRetentionValue',
        'policyId' => 'PolicyId',
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

        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }

        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }

        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }

        if (null !== $this->logRetentionType) {
            $res['LogRetentionType'] = $this->logRetentionType;
        }

        if (null !== $this->logRetentionValue) {
            $res['LogRetentionValue'] = $this->logRetentionValue;
        }

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
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

        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }

        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }

        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }

        if (isset($map['LogRetentionType'])) {
            $model->logRetentionType = $map['LogRetentionType'];
        }

        if (isset($map['LogRetentionValue'])) {
            $model->logRetentionValue = $map['LogRetentionValue'];
        }

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
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
