<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\QuerySmsAppIcpRecordResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appApprovalDate;

    /**
     * @var string
     */
    public $appIcpLicenseNumber;

    /**
     * @var int
     */
    public $appIcpRecordId;

    /**
     * @var string
     */
    public $appIcpRecordPic;

    /**
     * @var string
     */
    public $appIcpRecordPicUrl;

    /**
     * @var string
     */
    public $appPrincipalUnitName;

    /**
     * @var string
     */
    public $appServiceName;

    /**
     * @var string
     */
    public $domain;
    protected $_name = [
        'appApprovalDate' => 'AppApprovalDate',
        'appIcpLicenseNumber' => 'AppIcpLicenseNumber',
        'appIcpRecordId' => 'AppIcpRecordId',
        'appIcpRecordPic' => 'AppIcpRecordPic',
        'appIcpRecordPicUrl' => 'AppIcpRecordPicUrl',
        'appPrincipalUnitName' => 'AppPrincipalUnitName',
        'appServiceName' => 'AppServiceName',
        'domain' => 'Domain',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appApprovalDate) {
            $res['AppApprovalDate'] = $this->appApprovalDate;
        }

        if (null !== $this->appIcpLicenseNumber) {
            $res['AppIcpLicenseNumber'] = $this->appIcpLicenseNumber;
        }

        if (null !== $this->appIcpRecordId) {
            $res['AppIcpRecordId'] = $this->appIcpRecordId;
        }

        if (null !== $this->appIcpRecordPic) {
            $res['AppIcpRecordPic'] = $this->appIcpRecordPic;
        }

        if (null !== $this->appIcpRecordPicUrl) {
            $res['AppIcpRecordPicUrl'] = $this->appIcpRecordPicUrl;
        }

        if (null !== $this->appPrincipalUnitName) {
            $res['AppPrincipalUnitName'] = $this->appPrincipalUnitName;
        }

        if (null !== $this->appServiceName) {
            $res['AppServiceName'] = $this->appServiceName;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (isset($map['AppApprovalDate'])) {
            $model->appApprovalDate = $map['AppApprovalDate'];
        }

        if (isset($map['AppIcpLicenseNumber'])) {
            $model->appIcpLicenseNumber = $map['AppIcpLicenseNumber'];
        }

        if (isset($map['AppIcpRecordId'])) {
            $model->appIcpRecordId = $map['AppIcpRecordId'];
        }

        if (isset($map['AppIcpRecordPic'])) {
            $model->appIcpRecordPic = $map['AppIcpRecordPic'];
        }

        if (isset($map['AppIcpRecordPicUrl'])) {
            $model->appIcpRecordPicUrl = $map['AppIcpRecordPicUrl'];
        }

        if (isset($map['AppPrincipalUnitName'])) {
            $model->appPrincipalUnitName = $map['AppPrincipalUnitName'];
        }

        if (isset($map['AppServiceName'])) {
            $model->appServiceName = $map['AppServiceName'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        return $model;
    }
}
