<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\AppVersionListServiceResponseBody\data;

use AlibabaCloud\Tea\Model;

class versions extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersionId;

    /**
     * @var string
     */
    public $appVersionName;

    /**
     * @var string
     */
    public $appVersionStatus;

    /**
     * @var string
     */
    public $appVersionStatusMemo;

    /**
     * @var float
     */
    public $consumeCu;

    /**
     * @var string
     */
    public $fileAddress;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileUploadFinishTime;

    /**
     * @var string
     */
    public $fileUploadType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $tenantId;
    protected $_name = [
        'appId'                => 'AppId',
        'appVersionId'         => 'AppVersionId',
        'appVersionName'       => 'AppVersionName',
        'appVersionStatus'     => 'AppVersionStatus',
        'appVersionStatusMemo' => 'AppVersionStatusMemo',
        'consumeCu'            => 'ConsumeCu',
        'fileAddress'          => 'FileAddress',
        'fileSize'             => 'FileSize',
        'fileUploadFinishTime' => 'FileUploadFinishTime',
        'fileUploadType'       => 'FileUploadType',
        'gmtCreate'            => 'GmtCreate',
        'gmtModified'          => 'GmtModified',
        'tenantId'             => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersionId) {
            $res['AppVersionId'] = $this->appVersionId;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->appVersionStatus) {
            $res['AppVersionStatus'] = $this->appVersionStatus;
        }
        if (null !== $this->appVersionStatusMemo) {
            $res['AppVersionStatusMemo'] = $this->appVersionStatusMemo;
        }
        if (null !== $this->consumeCu) {
            $res['ConsumeCu'] = $this->consumeCu;
        }
        if (null !== $this->fileAddress) {
            $res['FileAddress'] = $this->fileAddress;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileUploadFinishTime) {
            $res['FileUploadFinishTime'] = $this->fileUploadFinishTime;
        }
        if (null !== $this->fileUploadType) {
            $res['FileUploadType'] = $this->fileUploadType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return versions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersionId'])) {
            $model->appVersionId = $map['AppVersionId'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['AppVersionStatus'])) {
            $model->appVersionStatus = $map['AppVersionStatus'];
        }
        if (isset($map['AppVersionStatusMemo'])) {
            $model->appVersionStatusMemo = $map['AppVersionStatusMemo'];
        }
        if (isset($map['ConsumeCu'])) {
            $model->consumeCu = $map['ConsumeCu'];
        }
        if (isset($map['FileAddress'])) {
            $model->fileAddress = $map['FileAddress'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileUploadFinishTime'])) {
            $model->fileUploadFinishTime = $map['FileUploadFinishTime'];
        }
        if (isset($map['FileUploadType'])) {
            $model->fileUploadType = $map['FileUploadType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
