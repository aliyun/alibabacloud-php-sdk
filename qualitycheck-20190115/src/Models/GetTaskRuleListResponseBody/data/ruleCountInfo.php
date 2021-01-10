<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetTaskRuleListResponseBody\data;

use AlibabaCloud\Tea\Model;

class ruleCountInfo extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $preReviewNumber;

    /**
     * @var int
     */
    public $hitNumber;

    /**
     * @var bool
     */
    public $select;

    /**
     * @var string
     */
    public $createEmpid;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $lastUpdateEmpid;

    /**
     * @var int
     */
    public $realViolationNumber;

    /**
     * @var int
     */
    public $isDelete;

    /**
     * @var float
     */
    public $hitRate;

    /**
     * @var string
     */
    public $rid;

    /**
     * @var int
     */
    public $checkNumber;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var int
     */
    public $lastUpdateTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var float
     */
    public $hitRealViolationRate;

    /**
     * @var int
     */
    public $reviewNumber;
    protected $_name = [
        'status'               => 'Status',
        'type'                 => 'Type',
        'preReviewNumber'      => 'PreReviewNumber',
        'hitNumber'            => 'HitNumber',
        'select'               => 'Select',
        'createEmpid'          => 'CreateEmpid',
        'createTime'           => 'CreateTime',
        'lastUpdateEmpid'      => 'LastUpdateEmpid',
        'realViolationNumber'  => 'RealViolationNumber',
        'isDelete'             => 'IsDelete',
        'hitRate'              => 'HitRate',
        'rid'                  => 'Rid',
        'checkNumber'          => 'CheckNumber',
        'typeName'             => 'TypeName',
        'lastUpdateTime'       => 'LastUpdateTime',
        'name'                 => 'Name',
        'hitRealViolationRate' => 'HitRealViolationRate',
        'reviewNumber'         => 'ReviewNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->preReviewNumber) {
            $res['PreReviewNumber'] = $this->preReviewNumber;
        }
        if (null !== $this->hitNumber) {
            $res['HitNumber'] = $this->hitNumber;
        }
        if (null !== $this->select) {
            $res['Select'] = $this->select;
        }
        if (null !== $this->createEmpid) {
            $res['CreateEmpid'] = $this->createEmpid;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastUpdateEmpid) {
            $res['LastUpdateEmpid'] = $this->lastUpdateEmpid;
        }
        if (null !== $this->realViolationNumber) {
            $res['RealViolationNumber'] = $this->realViolationNumber;
        }
        if (null !== $this->isDelete) {
            $res['IsDelete'] = $this->isDelete;
        }
        if (null !== $this->hitRate) {
            $res['HitRate'] = $this->hitRate;
        }
        if (null !== $this->rid) {
            $res['Rid'] = $this->rid;
        }
        if (null !== $this->checkNumber) {
            $res['CheckNumber'] = $this->checkNumber;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->lastUpdateTime) {
            $res['LastUpdateTime'] = $this->lastUpdateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->hitRealViolationRate) {
            $res['HitRealViolationRate'] = $this->hitRealViolationRate;
        }
        if (null !== $this->reviewNumber) {
            $res['ReviewNumber'] = $this->reviewNumber;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PreReviewNumber'])) {
            $model->preReviewNumber = $map['PreReviewNumber'];
        }
        if (isset($map['HitNumber'])) {
            $model->hitNumber = $map['HitNumber'];
        }
        if (isset($map['Select'])) {
            $model->select = $map['Select'];
        }
        if (isset($map['CreateEmpid'])) {
            $model->createEmpid = $map['CreateEmpid'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastUpdateEmpid'])) {
            $model->lastUpdateEmpid = $map['LastUpdateEmpid'];
        }
        if (isset($map['RealViolationNumber'])) {
            $model->realViolationNumber = $map['RealViolationNumber'];
        }
        if (isset($map['IsDelete'])) {
            $model->isDelete = $map['IsDelete'];
        }
        if (isset($map['HitRate'])) {
            $model->hitRate = $map['HitRate'];
        }
        if (isset($map['Rid'])) {
            $model->rid = $map['Rid'];
        }
        if (isset($map['CheckNumber'])) {
            $model->checkNumber = $map['CheckNumber'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['LastUpdateTime'])) {
            $model->lastUpdateTime = $map['LastUpdateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['HitRealViolationRate'])) {
            $model->hitRealViolationRate = $map['HitRealViolationRate'];
        }
        if (isset($map['ReviewNumber'])) {
            $model->reviewNumber = $map['ReviewNumber'];
        }

        return $model;
    }
}
