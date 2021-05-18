<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectListResponseBody\data;

use AlibabaCloud\Tea\Model;

class qualityProjectList extends Model
{
    /**
     * @description 质检任务状态
     *
     * @var int
     */
    public $status;

    /**
     * @description 质检任务类型
     *
     * @var int
     */
    public $qualityType;

    /**
     * @description 质检规则列表
     *
     * @var int[]
     */
    public $qualityRuleIds;

    /**
     * @description CreateTime
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 质检任务名称
     *
     * @var string
     */
    public $projectName;

    /**
     * @description 质检任务频率
     *
     * @var int
     */
    public $checkFreqType;

    /**
     * @description 技能组分组列表
     *
     * @var int[]
     */
    public $depList;

    /**
     * @description 坐席列表
     *
     * @var int[]
     */
    public $servicerList;

    /**
     * @description 版本
     *
     * @var int
     */
    public $version;

    /**
     * @description 技能组列表
     *
     * @var int[]
     */
    public $groupList;

    /**
     * @description 质检任务Id
     *
     * @var int
     */
    public $id;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $modifyTime;
    protected $_name = [
        'status'         => 'Status',
        'qualityType'    => 'QualityType',
        'qualityRuleIds' => 'QualityRuleIds',
        'createTime'     => 'CreateTime',
        'projectName'    => 'ProjectName',
        'checkFreqType'  => 'CheckFreqType',
        'depList'        => 'DepList',
        'servicerList'   => 'ServicerList',
        'version'        => 'Version',
        'groupList'      => 'GroupList',
        'id'             => 'Id',
        'modifyTime'     => 'ModifyTime',
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
        if (null !== $this->qualityType) {
            $res['QualityType'] = $this->qualityType;
        }
        if (null !== $this->qualityRuleIds) {
            $res['QualityRuleIds'] = $this->qualityRuleIds;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }
        if (null !== $this->depList) {
            $res['DepList'] = $this->depList;
        }
        if (null !== $this->servicerList) {
            $res['ServicerList'] = $this->servicerList;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return qualityProjectList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['QualityType'])) {
            $model->qualityType = $map['QualityType'];
        }
        if (isset($map['QualityRuleIds'])) {
            if (!empty($map['QualityRuleIds'])) {
                $model->qualityRuleIds = $map['QualityRuleIds'];
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }
        if (isset($map['DepList'])) {
            if (!empty($map['DepList'])) {
                $model->depList = $map['DepList'];
            }
        }
        if (isset($map['ServicerList'])) {
            if (!empty($map['ServicerList'])) {
                $model->servicerList = $map['ServicerList'];
            }
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
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

        return $model;
    }
}
