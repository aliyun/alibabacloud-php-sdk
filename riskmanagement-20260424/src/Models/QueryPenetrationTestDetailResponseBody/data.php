<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models\QueryPenetrationTestDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $applyTime;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var bool
     */
    public $isThirdpartyTest;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $testContent;

    /**
     * @var int
     */
    public $testEndDate;

    /**
     * @var string
     */
    public $testSourceIps;

    /**
     * @var int
     */
    public $testStartDate;

    /**
     * @var string
     */
    public $testSteps;

    /**
     * @var string
     */
    public $thirdpartyEmail;

    /**
     * @var string
     */
    public $thirdpartyMobile;

    /**
     * @var string
     */
    public $thirdpartyTester;
    protected $_name = [
        'applyTime' => 'ApplyTime',
        'assetType' => 'AssetType',
        'id' => 'Id',
        'ip' => 'Ip',
        'isThirdpartyTest' => 'IsThirdpartyTest',
        'status' => 'Status',
        'testContent' => 'TestContent',
        'testEndDate' => 'TestEndDate',
        'testSourceIps' => 'TestSourceIps',
        'testStartDate' => 'TestStartDate',
        'testSteps' => 'TestSteps',
        'thirdpartyEmail' => 'ThirdpartyEmail',
        'thirdpartyMobile' => 'ThirdpartyMobile',
        'thirdpartyTester' => 'ThirdpartyTester',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyTime) {
            $res['ApplyTime'] = $this->applyTime;
        }

        if (null !== $this->assetType) {
            $res['AssetType'] = $this->assetType;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        if (null !== $this->isThirdpartyTest) {
            $res['IsThirdpartyTest'] = $this->isThirdpartyTest;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->testContent) {
            $res['TestContent'] = $this->testContent;
        }

        if (null !== $this->testEndDate) {
            $res['TestEndDate'] = $this->testEndDate;
        }

        if (null !== $this->testSourceIps) {
            $res['TestSourceIps'] = $this->testSourceIps;
        }

        if (null !== $this->testStartDate) {
            $res['TestStartDate'] = $this->testStartDate;
        }

        if (null !== $this->testSteps) {
            $res['TestSteps'] = $this->testSteps;
        }

        if (null !== $this->thirdpartyEmail) {
            $res['ThirdpartyEmail'] = $this->thirdpartyEmail;
        }

        if (null !== $this->thirdpartyMobile) {
            $res['ThirdpartyMobile'] = $this->thirdpartyMobile;
        }

        if (null !== $this->thirdpartyTester) {
            $res['ThirdpartyTester'] = $this->thirdpartyTester;
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
        if (isset($map['ApplyTime'])) {
            $model->applyTime = $map['ApplyTime'];
        }

        if (isset($map['AssetType'])) {
            $model->assetType = $map['AssetType'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        if (isset($map['IsThirdpartyTest'])) {
            $model->isThirdpartyTest = $map['IsThirdpartyTest'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TestContent'])) {
            $model->testContent = $map['TestContent'];
        }

        if (isset($map['TestEndDate'])) {
            $model->testEndDate = $map['TestEndDate'];
        }

        if (isset($map['TestSourceIps'])) {
            $model->testSourceIps = $map['TestSourceIps'];
        }

        if (isset($map['TestStartDate'])) {
            $model->testStartDate = $map['TestStartDate'];
        }

        if (isset($map['TestSteps'])) {
            $model->testSteps = $map['TestSteps'];
        }

        if (isset($map['ThirdpartyEmail'])) {
            $model->thirdpartyEmail = $map['ThirdpartyEmail'];
        }

        if (isset($map['ThirdpartyMobile'])) {
            $model->thirdpartyMobile = $map['ThirdpartyMobile'];
        }

        if (isset($map['ThirdpartyTester'])) {
            $model->thirdpartyTester = $map['ThirdpartyTester'];
        }

        return $model;
    }
}
