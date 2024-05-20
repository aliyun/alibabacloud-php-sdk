<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dbs\V20210101\Models\ModifyBackupPolicyRequest;

use AlibabaCloud\Tea\Model;

class advanceDataPolicies extends Model
{
    /**
     * @example UPDATE
     *
     * @var string
     */
    public $actionType;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $destRegion;

    /**
     * @example level1
     *
     * @var string
     */
    public $destType;

    /**
     * @example backupInterval
     *
     * @var string
     */
    public $filterKey;

    /**
     * @example crontab
     *
     * @var string
     */
    public $filterType;

    /**
     * @example crontab
     *
     * @var string
     */
    public $filterTypeCopy;

    /**
     * @example 180
     *
     * @var string
     */
    public $filterValue;

    /**
     * @example 6s67c7i3y8f8p72808p******
     *
     * @var string
     */
    public $policyId;

    /**
     * @example delay
     *
     * @var string
     */
    public $retentionType;

    /**
     * @example 4
     *
     * @var string
     */
    public $retentionValue;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @example db
     *
     * @var string
     */
    public $srcType;
    protected $_name = [
        'actionType'     => 'ActionType',
        'destRegion'     => 'DestRegion',
        'destType'       => 'DestType',
        'filterKey'      => 'FilterKey',
        'filterType'     => 'FilterType',
        'filterTypeCopy' => 'FilterType-copy',
        'filterValue'    => 'FilterValue',
        'policyId'       => 'PolicyId',
        'retentionType'  => 'RetentionType',
        'retentionValue' => 'RetentionValue',
        'srcRegion'      => 'SrcRegion',
        'srcType'        => 'SrcType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->destRegion) {
            $res['DestRegion'] = $this->destRegion;
        }
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterType) {
            $res['FilterType'] = $this->filterType;
        }
        if (null !== $this->filterTypeCopy) {
            $res['FilterType-copy'] = $this->filterTypeCopy;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advanceDataPolicies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['DestRegion'])) {
            $model->destRegion = $map['DestRegion'];
        }
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }
        if (isset($map['FilterType'])) {
            $model->filterType = $map['FilterType'];
        }
        if (isset($map['FilterType-copy'])) {
            $model->filterTypeCopy = $map['FilterType-copy'];
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

        return $model;
    }
}
