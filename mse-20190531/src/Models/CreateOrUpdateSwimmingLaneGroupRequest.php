<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateSwimmingLaneGroupRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     * zh: Chinese en: English Default value: zh
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The IDs of applications. Separate application IDs with commas (,).
     *
     * @example hkhon1po62@c3df23522baa898,hkhon1po62@66e5235415730a5,hkhon1po62@958bba95910341f
     *
     * @var string
     */
    public $appIds;

    /**
     * @description Specifies whether to enable database canary release.
     *
     * @example true
     *
     * @var bool
     */
    public $dbGrayEnable;

    /**
     * @description Specifies whether to enable a lane group.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The ingress application.
     *
     * @example Ingress
     *
     * @var string
     */
    public $entryApp;

    /**
     * @description The creation time.
     *
     * @example 2021-12-20T03:22:07.000+0000
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The update time.
     *
     * @example 2022-02-24T07:18:24.962+0000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the primary key. The primary key is auto-increment.
     *
     * @example 120
     *
     * @var int
     */
    public $id;

    /**
     * @description The license key in use.
     *
     * @example 9wnrf04a0j@****
     *
     * @var string
     */
    public $licenseKey;

    /**
     * @description The side for message filtering when the canary release for messaging feature is enabled.
     *
     * @example Server
     *
     * @var string
     */
    public $messageQueueFilterSide;

    /**
     * @description Specifies whether to enable canary release for messaging.
     *
     * @example true
     *
     * @var bool
     */
    public $messageQueueGrayEnable;

    /**
     * @description The name.
     *
     * @example group1
     *
     * @var string
     */
    public $name;

    /**
     * @description Region.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @description The service source. Set the value to edasmsc.
     *
     * @example edasmsc
     *
     * @var string
     */
    public $source;

    /**
     * @description The status of the lane group. The value 0 indicates that the lane group is disabled. The value 1 indicates that the lane group is enabled.
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The Alibaba Cloud account. The value is a number, such as 136246\*\*\*\*\*\*809. You can leave this parameter empty.
     *
     * @example ""
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'acceptLanguage'         => 'AcceptLanguage',
        'appIds'                 => 'AppIds',
        'dbGrayEnable'           => 'DbGrayEnable',
        'enable'                 => 'Enable',
        'entryApp'               => 'EntryApp',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'id'                     => 'Id',
        'licenseKey'             => 'LicenseKey',
        'messageQueueFilterSide' => 'MessageQueueFilterSide',
        'messageQueueGrayEnable' => 'MessageQueueGrayEnable',
        'name'                   => 'Name',
        'region'                 => 'Region',
        'source'                 => 'Source',
        'status'                 => 'Status',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->appIds) {
            $res['AppIds'] = $this->appIds;
        }
        if (null !== $this->dbGrayEnable) {
            $res['DbGrayEnable'] = $this->dbGrayEnable;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->entryApp) {
            $res['EntryApp'] = $this->entryApp;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->licenseKey) {
            $res['LicenseKey'] = $this->licenseKey;
        }
        if (null !== $this->messageQueueFilterSide) {
            $res['MessageQueueFilterSide'] = $this->messageQueueFilterSide;
        }
        if (null !== $this->messageQueueGrayEnable) {
            $res['MessageQueueGrayEnable'] = $this->messageQueueGrayEnable;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateSwimmingLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AppIds'])) {
            $model->appIds = $map['AppIds'];
        }
        if (isset($map['DbGrayEnable'])) {
            $model->dbGrayEnable = $map['DbGrayEnable'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['EntryApp'])) {
            $model->entryApp = $map['EntryApp'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LicenseKey'])) {
            $model->licenseKey = $map['LicenseKey'];
        }
        if (isset($map['MessageQueueFilterSide'])) {
            $model->messageQueueFilterSide = $map['MessageQueueFilterSide'];
        }
        if (isset($map['MessageQueueGrayEnable'])) {
            $model->messageQueueGrayEnable = $map['MessageQueueGrayEnable'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
