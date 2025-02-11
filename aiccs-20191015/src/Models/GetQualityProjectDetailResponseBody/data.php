<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetQualityProjectDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $checkFreqType;
    /**
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
     * @var int
     */
    public $id;
    /**
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
     * @var int
     */
    public $qualityType;
    /**
     * @var int[]
     */
    public $servicerList;
    /**
     * @var int
     */
    public $status;
    /**
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
        if (\is_array($this->depList)) {
            Model::validateArray($this->depList);
        }
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        if (\is_array($this->qualityRuleIds)) {
            Model::validateArray($this->qualityRuleIds);
        }
        if (\is_array($this->servicerList)) {
            Model::validateArray($this->servicerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkFreqType) {
            $res['CheckFreqType'] = $this->checkFreqType;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->depList) {
            if (\is_array($this->depList)) {
                $res['DepList'] = [];
                $n1             = 0;
                foreach ($this->depList as $item1) {
                    $res['DepList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['GroupList'] = [];
                $n1               = 0;
                foreach ($this->groupList as $item1) {
                    $res['GroupList'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->qualityRuleIds)) {
                $res['QualityRuleIds'] = [];
                $n1                    = 0;
                foreach ($this->qualityRuleIds as $item1) {
                    $res['QualityRuleIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->qualityType) {
            $res['QualityType'] = $this->qualityType;
        }

        if (null !== $this->servicerList) {
            if (\is_array($this->servicerList)) {
                $res['ServicerList'] = [];
                $n1                  = 0;
                foreach ($this->servicerList as $item1) {
                    $res['ServicerList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['CheckFreqType'])) {
            $model->checkFreqType = $map['CheckFreqType'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DepList'])) {
            if (!empty($map['DepList'])) {
                $model->depList = [];
                $n1             = 0;
                foreach ($map['DepList'] as $item1) {
                    $model->depList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupList'])) {
            if (!empty($map['GroupList'])) {
                $model->groupList = [];
                $n1               = 0;
                foreach ($map['GroupList'] as $item1) {
                    $model->groupList[$n1++] = $item1;
                }
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
                $model->qualityRuleIds = [];
                $n1                    = 0;
                foreach ($map['QualityRuleIds'] as $item1) {
                    $model->qualityRuleIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['QualityType'])) {
            $model->qualityType = $map['QualityType'];
        }

        if (isset($map['ServicerList'])) {
            if (!empty($map['ServicerList'])) {
                $model->servicerList = [];
                $n1                  = 0;
                foreach ($map['ServicerList'] as $item1) {
                    $model->servicerList[$n1++] = $item1;
                }
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
