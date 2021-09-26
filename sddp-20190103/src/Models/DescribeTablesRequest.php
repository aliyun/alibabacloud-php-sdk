<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeTablesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $riskLevelId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var string
     */
    public $sensLevelName;

    /**
     * @var int
     */
    public $packageId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $lastScanTimeStart;

    /**
     * @var int
     */
    public $lastScanTimeEnd;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceDescription;
    protected $_name = [
        'lang'                => 'Lang',
        'name'                => 'Name',
        'productId'           => 'ProductId',
        'productCode'         => 'ProductCode',
        'riskLevelId'         => 'RiskLevelId',
        'ruleId'              => 'RuleId',
        'instanceId'          => 'InstanceId',
        'instanceName'        => 'InstanceName',
        'ruleName'            => 'RuleName',
        'sensLevelName'       => 'SensLevelName',
        'packageId'           => 'PackageId',
        'pageSize'            => 'PageSize',
        'currentPage'         => 'CurrentPage',
        'lastScanTimeStart'   => 'LastScanTimeStart',
        'lastScanTimeEnd'     => 'LastScanTimeEnd',
        'startTime'           => 'StartTime',
        'endTime'             => 'EndTime',
        'instanceDescription' => 'InstanceDescription',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->sensLevelName) {
            $res['SensLevelName'] = $this->sensLevelName;
        }
        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lastScanTimeStart) {
            $res['LastScanTimeStart'] = $this->lastScanTimeStart;
        }
        if (null !== $this->lastScanTimeEnd) {
            $res['LastScanTimeEnd'] = $this->lastScanTimeEnd;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceDescription) {
            $res['InstanceDescription'] = $this->instanceDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['SensLevelName'])) {
            $model->sensLevelName = $map['SensLevelName'];
        }
        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LastScanTimeStart'])) {
            $model->lastScanTimeStart = $map['LastScanTimeStart'];
        }
        if (isset($map['LastScanTimeEnd'])) {
            $model->lastScanTimeEnd = $map['LastScanTimeEnd'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceDescription'])) {
            $model->instanceDescription = $map['InstanceDescription'];
        }

        return $model;
    }
}
