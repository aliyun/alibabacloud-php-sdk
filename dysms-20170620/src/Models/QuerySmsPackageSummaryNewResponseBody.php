<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;

class QuerySmsPackageSummaryNewResponseBody extends Model
{
    /**
     * @var int
     */
    public $certifyType;

    /**
     * @var int
     */
    public $interPackageCount;

    /**
     * @var int
     */
    public $interPackageSum;

    /**
     * @var int
     */
    public $mktPackageCount;

    /**
     * @var int
     */
    public $mktPackageSum;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $smsPackageCount;

    /**
     * @var int
     */
    public $smsPackageSum;

    /**
     * @var int
     */
    public $sysPackageCount;

    /**
     * @var int
     */
    public $sysPackageSum;
    protected $_name = [
        'certifyType' => 'CertifyType',
        'interPackageCount' => 'InterPackageCount',
        'interPackageSum' => 'InterPackageSum',
        'mktPackageCount' => 'MktPackageCount',
        'mktPackageSum' => 'MktPackageSum',
        'requestId' => 'RequestId',
        'smsPackageCount' => 'SmsPackageCount',
        'smsPackageSum' => 'SmsPackageSum',
        'sysPackageCount' => 'SysPackageCount',
        'sysPackageSum' => 'SysPackageSum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certifyType) {
            $res['CertifyType'] = $this->certifyType;
        }

        if (null !== $this->interPackageCount) {
            $res['InterPackageCount'] = $this->interPackageCount;
        }

        if (null !== $this->interPackageSum) {
            $res['InterPackageSum'] = $this->interPackageSum;
        }

        if (null !== $this->mktPackageCount) {
            $res['MktPackageCount'] = $this->mktPackageCount;
        }

        if (null !== $this->mktPackageSum) {
            $res['MktPackageSum'] = $this->mktPackageSum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->smsPackageCount) {
            $res['SmsPackageCount'] = $this->smsPackageCount;
        }

        if (null !== $this->smsPackageSum) {
            $res['SmsPackageSum'] = $this->smsPackageSum;
        }

        if (null !== $this->sysPackageCount) {
            $res['SysPackageCount'] = $this->sysPackageCount;
        }

        if (null !== $this->sysPackageSum) {
            $res['SysPackageSum'] = $this->sysPackageSum;
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
        if (isset($map['CertifyType'])) {
            $model->certifyType = $map['CertifyType'];
        }

        if (isset($map['InterPackageCount'])) {
            $model->interPackageCount = $map['InterPackageCount'];
        }

        if (isset($map['InterPackageSum'])) {
            $model->interPackageSum = $map['InterPackageSum'];
        }

        if (isset($map['MktPackageCount'])) {
            $model->mktPackageCount = $map['MktPackageCount'];
        }

        if (isset($map['MktPackageSum'])) {
            $model->mktPackageSum = $map['MktPackageSum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SmsPackageCount'])) {
            $model->smsPackageCount = $map['SmsPackageCount'];
        }

        if (isset($map['SmsPackageSum'])) {
            $model->smsPackageSum = $map['SmsPackageSum'];
        }

        if (isset($map['SysPackageCount'])) {
            $model->sysPackageCount = $map['SysPackageCount'];
        }

        if (isset($map['SysPackageSum'])) {
            $model->sysPackageSum = $map['SysPackageSum'];
        }

        return $model;
    }
}
