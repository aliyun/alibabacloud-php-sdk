<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateBackendReportRequest;

use AlibabaCloud\Dara\Model;

class reportObjects extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $devType;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $reportDomain;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $softwareId;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'devType' => 'DevType',
        'deviceType' => 'DeviceType',
        'fileMd5' => 'FileMd5',
        'reportDomain' => 'ReportDomain',
        'scope' => 'Scope',
        'softwareId' => 'SoftwareId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->devType) {
            $res['DevType'] = $this->devType;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->reportDomain) {
            $res['ReportDomain'] = $this->reportDomain;
        }

        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        if (null !== $this->softwareId) {
            $res['SoftwareId'] = $this->softwareId;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['DevType'])) {
            $model->devType = $map['DevType'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['ReportDomain'])) {
            $model->reportDomain = $map['ReportDomain'];
        }

        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        if (isset($map['SoftwareId'])) {
            $model->softwareId = $map['SoftwareId'];
        }

        return $model;
    }
}
