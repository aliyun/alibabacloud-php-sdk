<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class DescribeVerifySearchPageListRequest extends Model
{
    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certifyId;

    /**
     * @var string
     */
    public $currentPage;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var bool
     */
    public $hasDeviceRisk;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $outerOrderNo;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $riskBizScenario;

    /**
     * @var int
     */
    public $riskDevice;

    /**
     * @var int
     */
    public $riskDeviceToken;

    /**
     * @var int
     */
    public $riskGeneric;

    /**
     * @var int
     */
    public $riskModelMining;

    /**
     * @var int
     */
    public $root;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var int
     */
    public $simulator;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $subCodes;

    /**
     * @var int
     */
    public $virtualVideo;
    protected $_name = [
        'certNo' => 'CertNo',
        'certifyId' => 'CertifyId',
        'currentPage' => 'CurrentPage',
        'endDate' => 'EndDate',
        'hasDeviceRisk' => 'HasDeviceRisk',
        'model' => 'Model',
        'outerOrderNo' => 'OuterOrderNo',
        'pageSize' => 'PageSize',
        'passed' => 'Passed',
        'productCode' => 'ProductCode',
        'riskBizScenario' => 'RiskBizScenario',
        'riskDevice' => 'RiskDevice',
        'riskDeviceToken' => 'RiskDeviceToken',
        'riskGeneric' => 'RiskGeneric',
        'riskModelMining' => 'RiskModelMining',
        'root' => 'Root',
        'sceneId' => 'SceneId',
        'simulator' => 'Simulator',
        'startDate' => 'StartDate',
        'subCode' => 'SubCode',
        'subCodes' => 'SubCodes',
        'virtualVideo' => 'VirtualVideo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certNo) {
            $res['CertNo'] = $this->certNo;
        }

        if (null !== $this->certifyId) {
            $res['CertifyId'] = $this->certifyId;
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->hasDeviceRisk) {
            $res['HasDeviceRisk'] = $this->hasDeviceRisk;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->riskBizScenario) {
            $res['RiskBizScenario'] = $this->riskBizScenario;
        }

        if (null !== $this->riskDevice) {
            $res['RiskDevice'] = $this->riskDevice;
        }

        if (null !== $this->riskDeviceToken) {
            $res['RiskDeviceToken'] = $this->riskDeviceToken;
        }

        if (null !== $this->riskGeneric) {
            $res['RiskGeneric'] = $this->riskGeneric;
        }

        if (null !== $this->riskModelMining) {
            $res['RiskModelMining'] = $this->riskModelMining;
        }

        if (null !== $this->root) {
            $res['Root'] = $this->root;
        }

        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }

        if (null !== $this->simulator) {
            $res['Simulator'] = $this->simulator;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->subCodes) {
            $res['SubCodes'] = $this->subCodes;
        }

        if (null !== $this->virtualVideo) {
            $res['VirtualVideo'] = $this->virtualVideo;
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
        if (isset($map['CertNo'])) {
            $model->certNo = $map['CertNo'];
        }

        if (isset($map['CertifyId'])) {
            $model->certifyId = $map['CertifyId'];
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['HasDeviceRisk'])) {
            $model->hasDeviceRisk = $map['HasDeviceRisk'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RiskBizScenario'])) {
            $model->riskBizScenario = $map['RiskBizScenario'];
        }

        if (isset($map['RiskDevice'])) {
            $model->riskDevice = $map['RiskDevice'];
        }

        if (isset($map['RiskDeviceToken'])) {
            $model->riskDeviceToken = $map['RiskDeviceToken'];
        }

        if (isset($map['RiskGeneric'])) {
            $model->riskGeneric = $map['RiskGeneric'];
        }

        if (isset($map['RiskModelMining'])) {
            $model->riskModelMining = $map['RiskModelMining'];
        }

        if (isset($map['Root'])) {
            $model->root = $map['Root'];
        }

        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }

        if (isset($map['Simulator'])) {
            $model->simulator = $map['Simulator'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['SubCodes'])) {
            $model->subCodes = $map['SubCodes'];
        }

        if (isset($map['VirtualVideo'])) {
            $model->virtualVideo = $map['VirtualVideo'];
        }

        return $model;
    }
}
