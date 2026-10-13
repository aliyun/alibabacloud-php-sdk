<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RiskManagement\V20260424\Models;

use AlibabaCloud\Dara\Model;

class SubmitPenetrationTestRequest extends Model
{
    /**
     * @var string
     */
    public $assetList;

    /**
     * @var bool
     */
    public $isThirdpartyTest;

    /**
     * @var string
     */
    public $testContent;

    /**
     * @var string
     */
    public $testEndDate;

    /**
     * @var string
     */
    public $testSourceIps;

    /**
     * @var string
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
        'assetList' => 'AssetList',
        'isThirdpartyTest' => 'IsThirdpartyTest',
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
        if (null !== $this->assetList) {
            $res['AssetList'] = $this->assetList;
        }

        if (null !== $this->isThirdpartyTest) {
            $res['IsThirdpartyTest'] = $this->isThirdpartyTest;
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
        if (isset($map['AssetList'])) {
            $model->assetList = $map['AssetList'];
        }

        if (isset($map['IsThirdpartyTest'])) {
            $model->isThirdpartyTest = $map['IsThirdpartyTest'];
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
