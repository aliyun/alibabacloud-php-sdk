<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\InstallFabricChaincodePackageResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @var string
     */
    public $checksum;

    /**
     * @var int
     */
    public $deleteTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var int
     */
    public $installTime;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $md5sum;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $ossBucket;

    /**
     * @var string
     */
    public $ossURL;

    /**
     * @var string
     */
    public $providerBid;

    /**
     * @var int
     */
    public $providerUid;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $typeName;

    /**
     * @var int
     */
    public $uploadTime;
    protected $_name = [
        'chaincodePackageId' => 'ChaincodePackageId',
        'checksum'           => 'Checksum',
        'deleteTime'         => 'DeleteTime',
        'deleted'            => 'Deleted',
        'installTime'        => 'InstallTime',
        'label'              => 'Label',
        'md5sum'             => 'Md5sum',
        'organizationId'     => 'OrganizationId',
        'ossBucket'          => 'OssBucket',
        'ossURL'             => 'OssURL',
        'providerBid'        => 'ProviderBid',
        'providerUid'        => 'ProviderUid',
        'state'              => 'State',
        'type'               => 'Type',
        'typeName'           => 'TypeName',
        'uploadTime'         => 'UploadTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chaincodePackageId) {
            $res['ChaincodePackageId'] = $this->chaincodePackageId;
        }
        if (null !== $this->checksum) {
            $res['Checksum'] = $this->checksum;
        }
        if (null !== $this->deleteTime) {
            $res['DeleteTime'] = $this->deleteTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->installTime) {
            $res['InstallTime'] = $this->installTime;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->md5sum) {
            $res['Md5sum'] = $this->md5sum;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->ossBucket) {
            $res['OssBucket'] = $this->ossBucket;
        }
        if (null !== $this->ossURL) {
            $res['OssURL'] = $this->ossURL;
        }
        if (null !== $this->providerBid) {
            $res['ProviderBid'] = $this->providerBid;
        }
        if (null !== $this->providerUid) {
            $res['ProviderUid'] = $this->providerUid;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeName) {
            $res['TypeName'] = $this->typeName;
        }
        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChaincodePackageId'])) {
            $model->chaincodePackageId = $map['ChaincodePackageId'];
        }
        if (isset($map['Checksum'])) {
            $model->checksum = $map['Checksum'];
        }
        if (isset($map['DeleteTime'])) {
            $model->deleteTime = $map['DeleteTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['InstallTime'])) {
            $model->installTime = $map['InstallTime'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Md5sum'])) {
            $model->md5sum = $map['Md5sum'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['OssBucket'])) {
            $model->ossBucket = $map['OssBucket'];
        }
        if (isset($map['OssURL'])) {
            $model->ossURL = $map['OssURL'];
        }
        if (isset($map['ProviderBid'])) {
            $model->providerBid = $map['ProviderBid'];
        }
        if (isset($map['ProviderUid'])) {
            $model->providerUid = $map['ProviderUid'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeName'])) {
            $model->typeName = $map['TypeName'];
        }
        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
