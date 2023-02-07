<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $checkFreqType;

    /**
     * @example 2021-04-07 18:07:18
     *
     * @var string
     */
    public $createTime;

    /**
     * @var int[]
     */
    public $depList;

    /**
     * @var int[]
     */
    public $groupList;

    /**
     * @example 15977801
     *
     * @var int
     */
    public $id;

    /**
     * @example 2021-04-07 18:07:19
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var int[]
     */
    public $qualityRuleIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $qualityType;

    /**
     * @var int[]
     */
    public $servicerList;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 1
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'checkFreqType'  => 'CheckFreqType',
        'createTime'     => 'CreateTime',
        'depList'        => 'DepList',
        'groupList'      => 'GroupList',
        'id'             => 'Id',
        'modifyTime'     => 'ModifyTime',
        'projectName'    => 'ProjectName',
        'qualityRuleIds' => 'QualityRuleIds',
        'qualityType'    => 'QualityType',
        'servicerList'   => 'ServicerList',
        'status'         => 'Status',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->depList) {
            $res['DepList'] = $this->depList;
        }
        if (null !== $this->groupList) {
            $res['GroupList'] = $this->groupList;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->qualityRuleIds) {
            $res['QualityRuleIds'] = $this->qualityRuleIds;
        }
        if (null !== $this->qualityType) {
            $res['QualityType'] = $this->qualityType;
        }
        if (null !== $this->servicerList) {
            $res['ServicerList'] = $this->servicerList;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DepList'])) {
            if (!empty($map['DepList'])) {
                $model->depList = $map['DepList'];
            }
        }
        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = $map['GroupList'];
            }
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['QualityRuleIds'])) {
            if (!empty($map['QualityRuleIds'])) {
                $model->qualityRuleIds = $map['QualityRuleIds'];
            }
        }
        if (isset($map['QualityType'])) {
            $model->qualityType = $map['QualityType'];
        }
        if (isset($map['ServicerList'])) {
            if (!empty($map['ServicerList'])) {
                $model->servicerList = $map['ServicerList'];
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
