<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceResponseBody extends Model
{
    /**
     * @var string
     */
    public $extensions;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gmtRecentReport;

    /**
     * @var int
     */
    public $onlineStatus;

    /**
     * @var int
     */
    public $programExceptionNum;

    /**
     * @var string
     */
    public $programTrustDetail;

    /**
     * @var int
     */
    public $programTrustStatus;

    /**
     * @var int
     */
    public $programWhiteListId;

    /**
     * @var string
     */
    public $programWhiteListName;

    /**
     * @var int
     */
    public $propertyAffiliation;

    /**
     * @var string
     */
    public $propertyName;

    /**
     * @var string
     */
    public $propertyPrivateIp;

    /**
     * @var string
     */
    public $propertyPublicIp;

    /**
     * @var string
     */
    public $propertyUuid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $systemExceptionNum;

    /**
     * @var string
     */
    public $systemTrustDetail;

    /**
     * @var int
     */
    public $systemTrustStatus;

    /**
     * @var int
     */
    public $systemWhiteListId;
    protected $_name = [
        'extensions'           => 'Extensions',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'gmtRecentReport'      => 'GmtRecentReport',
        'onlineStatus'         => 'OnlineStatus',
        'programExceptionNum'  => 'ProgramExceptionNum',
        'programTrustDetail'   => 'ProgramTrustDetail',
        'programTrustStatus'   => 'ProgramTrustStatus',
        'programWhiteListId'   => 'ProgramWhiteListId',
        'programWhiteListName' => 'ProgramWhiteListName',
        'propertyAffiliation'  => 'PropertyAffiliation',
        'propertyName'         => 'PropertyName',
        'propertyPrivateIp'    => 'PropertyPrivateIp',
        'propertyPublicIp'     => 'PropertyPublicIp',
        'propertyUuid'         => 'PropertyUuid',
        'requestId'            => 'RequestId',
        'systemExceptionNum'   => 'SystemExceptionNum',
        'systemTrustDetail'    => 'SystemTrustDetail',
        'systemTrustStatus'    => 'SystemTrustStatus',
        'systemWhiteListId'    => 'SystemWhiteListId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extensions) {
            $res['Extensions'] = $this->extensions;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtRecentReport) {
            $res['GmtRecentReport'] = $this->gmtRecentReport;
        }
        if (null !== $this->onlineStatus) {
            $res['OnlineStatus'] = $this->onlineStatus;
        }
        if (null !== $this->programExceptionNum) {
            $res['ProgramExceptionNum'] = $this->programExceptionNum;
        }
        if (null !== $this->programTrustDetail) {
            $res['ProgramTrustDetail'] = $this->programTrustDetail;
        }
        if (null !== $this->programTrustStatus) {
            $res['ProgramTrustStatus'] = $this->programTrustStatus;
        }
        if (null !== $this->programWhiteListId) {
            $res['ProgramWhiteListId'] = $this->programWhiteListId;
        }
        if (null !== $this->programWhiteListName) {
            $res['ProgramWhiteListName'] = $this->programWhiteListName;
        }
        if (null !== $this->propertyAffiliation) {
            $res['PropertyAffiliation'] = $this->propertyAffiliation;
        }
        if (null !== $this->propertyName) {
            $res['PropertyName'] = $this->propertyName;
        }
        if (null !== $this->propertyPrivateIp) {
            $res['PropertyPrivateIp'] = $this->propertyPrivateIp;
        }
        if (null !== $this->propertyPublicIp) {
            $res['PropertyPublicIp'] = $this->propertyPublicIp;
        }
        if (null !== $this->propertyUuid) {
            $res['PropertyUuid'] = $this->propertyUuid;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->systemExceptionNum) {
            $res['SystemExceptionNum'] = $this->systemExceptionNum;
        }
        if (null !== $this->systemTrustDetail) {
            $res['SystemTrustDetail'] = $this->systemTrustDetail;
        }
        if (null !== $this->systemTrustStatus) {
            $res['SystemTrustStatus'] = $this->systemTrustStatus;
        }
        if (null !== $this->systemWhiteListId) {
            $res['SystemWhiteListId'] = $this->systemWhiteListId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extensions'])) {
            $model->extensions = $map['Extensions'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtRecentReport'])) {
            $model->gmtRecentReport = $map['GmtRecentReport'];
        }
        if (isset($map['OnlineStatus'])) {
            $model->onlineStatus = $map['OnlineStatus'];
        }
        if (isset($map['ProgramExceptionNum'])) {
            $model->programExceptionNum = $map['ProgramExceptionNum'];
        }
        if (isset($map['ProgramTrustDetail'])) {
            $model->programTrustDetail = $map['ProgramTrustDetail'];
        }
        if (isset($map['ProgramTrustStatus'])) {
            $model->programTrustStatus = $map['ProgramTrustStatus'];
        }
        if (isset($map['ProgramWhiteListId'])) {
            $model->programWhiteListId = $map['ProgramWhiteListId'];
        }
        if (isset($map['ProgramWhiteListName'])) {
            $model->programWhiteListName = $map['ProgramWhiteListName'];
        }
        if (isset($map['PropertyAffiliation'])) {
            $model->propertyAffiliation = $map['PropertyAffiliation'];
        }
        if (isset($map['PropertyName'])) {
            $model->propertyName = $map['PropertyName'];
        }
        if (isset($map['PropertyPrivateIp'])) {
            $model->propertyPrivateIp = $map['PropertyPrivateIp'];
        }
        if (isset($map['PropertyPublicIp'])) {
            $model->propertyPublicIp = $map['PropertyPublicIp'];
        }
        if (isset($map['PropertyUuid'])) {
            $model->propertyUuid = $map['PropertyUuid'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SystemExceptionNum'])) {
            $model->systemExceptionNum = $map['SystemExceptionNum'];
        }
        if (isset($map['SystemTrustDetail'])) {
            $model->systemTrustDetail = $map['SystemTrustDetail'];
        }
        if (isset($map['SystemTrustStatus'])) {
            $model->systemTrustStatus = $map['SystemTrustStatus'];
        }
        if (isset($map['SystemWhiteListId'])) {
            $model->systemWhiteListId = $map['SystemWhiteListId'];
        }

        return $model;
    }
}
