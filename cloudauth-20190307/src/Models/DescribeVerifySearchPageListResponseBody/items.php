<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySearchPageListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifySearchPageListResponseBody\items\extInfo;

class items extends Model
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
     * @var extInfo
     */
    public $extInfo;

    /**
     * @var string
     */
    public $gmtVerify;

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
    public $passed;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $root;

    /**
     * @var int
     */
    public $sceneId;

    /**
     * @var int
     */
    public $simulator;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $virtualVideo;
    protected $_name = [
        'certNo' => 'CertNo',
        'certifyId' => 'CertifyId',
        'extInfo' => 'ExtInfo',
        'gmtVerify' => 'GmtVerify',
        'model' => 'Model',
        'outerOrderNo' => 'OuterOrderNo',
        'passed' => 'Passed',
        'productCode' => 'ProductCode',
        'root' => 'Root',
        'sceneId' => 'SceneId',
        'simulator' => 'Simulator',
        'subCode' => 'SubCode',
        'userId' => 'UserId',
        'virtualVideo' => 'VirtualVideo',
    ];

    public function validate()
    {
        if (null !== $this->extInfo) {
            $this->extInfo->validate();
        }
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

        if (null !== $this->extInfo) {
            $res['ExtInfo'] = null !== $this->extInfo ? $this->extInfo->toArray($noStream) : $this->extInfo;
        }

        if (null !== $this->gmtVerify) {
            $res['GmtVerify'] = $this->gmtVerify;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->outerOrderNo) {
            $res['OuterOrderNo'] = $this->outerOrderNo;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
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

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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

        if (isset($map['ExtInfo'])) {
            $model->extInfo = extInfo::fromMap($map['ExtInfo']);
        }

        if (isset($map['GmtVerify'])) {
            $model->gmtVerify = $map['GmtVerify'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['OuterOrderNo'])) {
            $model->outerOrderNo = $map['OuterOrderNo'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
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

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['VirtualVideo'])) {
            $model->virtualVideo = $map['VirtualVideo'];
        }

        return $model;
    }
}
