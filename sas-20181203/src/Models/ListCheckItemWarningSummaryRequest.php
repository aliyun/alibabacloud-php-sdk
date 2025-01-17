<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListCheckItemWarningSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $checkItemFuzzy;
    /**
     * @var string
     */
    public $checkLevel;
    /**
     * @var string
     */
    public $checkType;
    /**
     * @var int
     */
    public $checkWarningStatus;
    /**
     * @var int[]
     */
    public $checkWarningStatusList;
    /**
     * @var string
     */
    public $containerFieldName;
    /**
     * @var string
     */
    public $containerFieldValue;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
     */
    public $groupId;
    /**
     * @var string
     */
    public $lang;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $riskType;
    /**
     * @var string
     */
    public $source;
    /**
     * @var int
     */
    public $startTime;
    /**
     * @var string[]
     */
    public $uuidList;
    protected $_name = [
        'checkItemFuzzy'         => 'CheckItemFuzzy',
        'checkLevel'             => 'CheckLevel',
        'checkType'              => 'CheckType',
        'checkWarningStatus'     => 'CheckWarningStatus',
        'checkWarningStatusList' => 'CheckWarningStatusList',
        'containerFieldName'     => 'ContainerFieldName',
        'containerFieldValue'    => 'ContainerFieldValue',
        'currentPage'            => 'CurrentPage',
        'groupId'                => 'GroupId',
        'lang'                   => 'Lang',
        'pageSize'               => 'PageSize',
        'riskType'               => 'RiskType',
        'source'                 => 'Source',
        'startTime'              => 'StartTime',
        'uuidList'               => 'UuidList',
    ];

    public function validate()
    {
        if (\is_array($this->checkWarningStatusList)) {
            Model::validateArray($this->checkWarningStatusList);
        }
        if (\is_array($this->uuidList)) {
            Model::validateArray($this->uuidList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkItemFuzzy) {
            $res['CheckItemFuzzy'] = $this->checkItemFuzzy;
        }

        if (null !== $this->checkLevel) {
            $res['CheckLevel'] = $this->checkLevel;
        }

        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }

        if (null !== $this->checkWarningStatus) {
            $res['CheckWarningStatus'] = $this->checkWarningStatus;
        }

        if (null !== $this->checkWarningStatusList) {
            if (\is_array($this->checkWarningStatusList)) {
                $res['CheckWarningStatusList'] = [];
                $n1                            = 0;
                foreach ($this->checkWarningStatusList as $item1) {
                    $res['CheckWarningStatusList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->containerFieldName) {
            $res['ContainerFieldName'] = $this->containerFieldName;
        }

        if (null !== $this->containerFieldValue) {
            $res['ContainerFieldValue'] = $this->containerFieldValue;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->uuidList) {
            if (\is_array($this->uuidList)) {
                $res['UuidList'] = [];
                $n1              = 0;
                foreach ($this->uuidList as $item1) {
                    $res['UuidList'][$n1++] = $item1;
                }
            }
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
        if (isset($map['CheckItemFuzzy'])) {
            $model->checkItemFuzzy = $map['CheckItemFuzzy'];
        }

        if (isset($map['CheckLevel'])) {
            $model->checkLevel = $map['CheckLevel'];
        }

        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }

        if (isset($map['CheckWarningStatus'])) {
            $model->checkWarningStatus = $map['CheckWarningStatus'];
        }

        if (isset($map['CheckWarningStatusList'])) {
            if (!empty($map['CheckWarningStatusList'])) {
                $model->checkWarningStatusList = [];
                $n1                            = 0;
                foreach ($map['CheckWarningStatusList'] as $item1) {
                    $model->checkWarningStatusList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ContainerFieldName'])) {
            $model->containerFieldName = $map['ContainerFieldName'];
        }

        if (isset($map['ContainerFieldValue'])) {
            $model->containerFieldValue = $map['ContainerFieldValue'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UuidList'])) {
            if (!empty($map['UuidList'])) {
                $model->uuidList = [];
                $n1              = 0;
                foreach ($map['UuidList'] as $item1) {
                    $model->uuidList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
