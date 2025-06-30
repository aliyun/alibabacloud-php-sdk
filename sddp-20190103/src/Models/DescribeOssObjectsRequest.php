<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;

class DescribeOssObjectsRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $fileCategoryCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $lastScanTimeEnd;

    /**
     * @var int
     */
    public $lastScanTimeStart;

    /**
     * @var int
     */
    public $marker;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $serviceRegionId;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'fileCategoryCode' => 'FileCategoryCode',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'lastScanTimeEnd' => 'LastScanTimeEnd',
        'lastScanTimeStart' => 'LastScanTimeStart',
        'marker' => 'Marker',
        'name' => 'Name',
        'pageSize' => 'PageSize',
        'riskLevelId' => 'RiskLevelId',
        'ruleId' => 'RuleId',
        'serviceRegionId' => 'ServiceRegionId',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->fileCategoryCode) {
            $res['FileCategoryCode'] = $this->fileCategoryCode;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->lastScanTimeEnd) {
            $res['LastScanTimeEnd'] = $this->lastScanTimeEnd;
        }

        if (null !== $this->lastScanTimeStart) {
            $res['LastScanTimeStart'] = $this->lastScanTimeStart;
        }

        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['FileCategoryCode'])) {
            $model->fileCategoryCode = $map['FileCategoryCode'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LastScanTimeEnd'])) {
            $model->lastScanTimeEnd = $map['LastScanTimeEnd'];
        }

        if (isset($map['LastScanTimeStart'])) {
            $model->lastScanTimeStart = $map['LastScanTimeStart'];
        }

        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
