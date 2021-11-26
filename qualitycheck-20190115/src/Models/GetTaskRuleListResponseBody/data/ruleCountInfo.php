<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListResponseBody\data;

use AlibabaCloud\Tea\Model;

class ruleCountInfo extends Model
{
    /**
     * @var int
     */
    public $checkNumber;

    /**
     * @var string
     */
    public $createEmpid;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $hitNumber;

    /**
     * @var float
     */
    public $hitRate;

    /**
     * @var float
     */
    public $hitRealViolationRate;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var string
     */
    public $lastUpdateEmpid;

    /**
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $preReviewNumber;

    /**
     * @var int
     */
    public $realViolationNumber;

    /**
     * @var int
     */
    public $reviewNumber;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var bool
     */
    public $select;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;
    protected $_name = [
        'checkNumber'          => 'CheckNumber',
        'createEmpid'          => 'CreateEmpid',
        'createTime'           => 'CreateTime',
        'hitNumber'            => 'HitNumber',
        'hitRate'              => 'HitRate',
        'hitRealViolationRate' => 'HitRealViolationRate',
        'isDelete'             => 'IsDelete',
        'lastUpdateEmpid'      => 'LastUpdateEmpid',
        'lastUpdateTime'       => 'LastUpdateTime',
        'name'                 => 'Name',
        'preReviewNumber'      => 'PreReviewNumber',
        'realViolationNumber'  => 'RealViolationNumber',
        'reviewNumber'         => 'ReviewNumber',
        'rid'                  => 'Rid',
        'select'               => 'Select',
        'status'               => 'Status',
        'type'                 => 'Type',
        'typeName'             => 'TypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkNumber) {
            $res['CheckNumber'] = $this->checkNumber;
        }
        if (null !== $this->createEmpid) {
            $res['CreateEmpid'] = $this->createEmpid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->hitNumber) {
            $res['HitNumber'] = $this->hitNumber;
        }
        if (null !== $this->hitRate) {
            $res['HitRate'] = $this->hitRate;
        }
        if (null !== $this->hitRealViolationRate) {
            $res['HitRealViolationRate'] = $this->hitRealViolationRate;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->lastUpdateEmpid) {
            $res['LastUpdateEmpid'] = $this->lastUpdateEmpid;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->preReviewNumber) {
            $res['PreReviewNumber'] = $this->preReviewNumber;
        }
        if (null !== $this->realViolationNumber) {
            $res['RealViolationNumber'] = $this->realViolationNumber;
        }
        if (null !== $this->reviewNumber) {
            $res['ReviewNumber'] = $this->reviewNumber;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleCountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckNumber'])) {
            $model->checkNumber = $map['CheckNumber'];
        }
        if (isset($map['CreateEmpid'])) {
            $model->createEmpid = $map['CreateEmpid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HitNumber'])) {
            $model->hitNumber = $map['HitNumber'];
        }
        if (isset($map['HitRate'])) {
            $model->hitRate = $map['HitRate'];
        }
        if (isset($map['HitRealViolationRate'])) {
            $model->hitRealViolationRate = $map['HitRealViolationRate'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['LastUpdateEmpid'])) {
            $model->lastUpdateEmpid = $map['LastUpdateEmpid'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PreReviewNumber'])) {
            $model->preReviewNumber = $map['PreReviewNumber'];
        }
        if (isset($map['RealViolationNumber'])) {
            $model->realViolationNumber = $map['RealViolationNumber'];
        }
        if (isset($map['ReviewNumber'])) {
            $model->reviewNumber = $map['ReviewNumber'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }

        return $model;
    }
}
