<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\DescribeBackupPolicyResponseBody\data;

use AlibabaCloud\Dara\Model;

class advanceDataPolicies extends Model
{
    /**
     * @var bool
     */
    public $autoCreated;

    /**
     * @var string
     */
    public $bakType;

    /**
     * @var string
     */
    public $destRegion;

    /**
     * @var string
     */
    public $destType;

    /**
     * @var string
     */
    public $dumpAction;

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
    public $policyId;

    /**
     * @var string
     */
    public $retentionType;

    /**
     * @var string
     */
    public $retentionValue;

    /**
     * @var string
     */
    public $srcRegion;

    /**
     * @var string
     */
    public $srcType;

    /**
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'autoCreated' => 'AutoCreated',
        'bakType' => 'BakType',
        'destRegion' => 'DestRegion',
        'destType' => 'DestType',
        'dumpAction' => 'DumpAction',
        'filterKey' => 'FilterKey',
        'filterType' => 'FilterType',
        'filterValue' => 'FilterValue',
        'policyId' => 'PolicyId',
        'retentionType' => 'RetentionType',
        'retentionValue' => 'RetentionValue',
        'srcRegion' => 'SrcRegion',
        'srcType' => 'SrcType',
        'storageClass' => 'StorageClass',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoCreated) {
            $res['AutoCreated'] = $this->autoCreated;
        }

        if (null !== $this->bakType) {
            $res['BakType'] = $this->bakType;
        }

        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }

        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }

        if (null !== $this->dumpAction) {
            $res['DumpAction'] = $this->dumpAction;
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

        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }

        if (null !== $this->retentionType) {
            $res['RetentionType'] = $this->retentionType;
        }

        if (null !== $this->retentionValue) {
            $res['RetentionValue'] = $this->retentionValue;
        }

        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }

        if (null !== $this->srcType) {
            $res['SrcType'] = $this->srcType;
        }

        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
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
        if (isset($map['AutoCreated'])) {
            $model->autoCreated = $map['AutoCreated'];
        }

        if (isset($map['BakType'])) {
            $model->bakType = $map['BakType'];
        }

        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }

        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }

        if (isset($map['DumpAction'])) {
            $model->dumpAction = $map['DumpAction'];
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

        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }

        if (isset($map['RetentionType'])) {
            $model->retentionType = $map['RetentionType'];
        }

        if (isset($map['RetentionValue'])) {
            $model->retentionValue = $map['RetentionValue'];
        }

        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }

        if (isset($map['SrcType'])) {
            $model->srcType = $map['SrcType'];
        }

        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
