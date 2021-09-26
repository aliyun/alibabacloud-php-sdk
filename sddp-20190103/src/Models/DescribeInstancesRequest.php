<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstancesRequest extends Model
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
    public $featureType;

    /**
     * @var string
     */
    public $productCode;

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
    public $lastFinishTimeStart;

    /**
     * @var int
     */
    public $lastFinishTimeEnd;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var int
     */
    public $userType;

    /**
     * @var string
     */
    public $sensLevelName;

    /**
     * @var string
     */
    public $source;

    /**
     * @var int
     */
    public $checkStatus;

    /**
     * @var string
     */
    public $nameAccurate;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;
    protected $_name = [
        'lang'                => 'Lang',
        'name'                => 'Name',
        'productId'           => 'ProductId',
        'riskLevelId'         => 'RiskLevelId',
        'ruleId'              => 'RuleId',
        'serviceRegionId'     => 'ServiceRegionId',
        'featureType'         => 'FeatureType',
        'productCode'         => 'ProductCode',
        'pageSize'            => 'PageSize',
        'currentPage'         => 'CurrentPage',
        'lastFinishTimeStart' => 'LastFinishTimeStart',
        'lastFinishTimeEnd'   => 'LastFinishTimeEnd',
        'userId'              => 'UserId',
        'userType'            => 'UserType',
        'sensLevelName'       => 'SensLevelName',
        'source'              => 'Source',
        'checkStatus'         => 'CheckStatus',
        'nameAccurate'        => 'NameAccurate',
        'startTime'           => 'StartTime',
        'endTime'             => 'EndTime',
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
        if (null !== $this->riskLevelId) {
            $res['RiskLevelId'] = $this->riskLevelId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->serviceRegionId) {
            $res['ServiceRegionId'] = $this->serviceRegionId;
        }
        if (null !== $this->featureType) {
            $res['FeatureType'] = $this->featureType;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->lastFinishTimeStart) {
            $res['LastFinishTimeStart'] = $this->lastFinishTimeStart;
        }
        if (null !== $this->lastFinishTimeEnd) {
            $res['LastFinishTimeEnd'] = $this->lastFinishTimeEnd;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }
        if (null !== $this->sensLevelName) {
            $res['SensLevelName'] = $this->sensLevelName;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->checkStatus) {
            $res['CheckStatus'] = $this->checkStatus;
        }
        if (null !== $this->nameAccurate) {
            $res['NameAccurate'] = $this->nameAccurate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstancesRequest
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
        if (isset($map['RiskLevelId'])) {
            $model->riskLevelId = $map['RiskLevelId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['ServiceRegionId'])) {
            $model->serviceRegionId = $map['ServiceRegionId'];
        }
        if (isset($map['FeatureType'])) {
            $model->featureType = $map['FeatureType'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LastFinishTimeStart'])) {
            $model->lastFinishTimeStart = $map['LastFinishTimeStart'];
        }
        if (isset($map['LastFinishTimeEnd'])) {
            $model->lastFinishTimeEnd = $map['LastFinishTimeEnd'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }
        if (isset($map['SensLevelName'])) {
            $model->sensLevelName = $map['SensLevelName'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['CheckStatus'])) {
            $model->checkStatus = $map['CheckStatus'];
        }
        if (isset($map['NameAccurate'])) {
            $model->nameAccurate = $map['NameAccurate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
