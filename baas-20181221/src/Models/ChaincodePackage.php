<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class ChaincodePackage extends Model
{
    /**
     * @description 链码包ID
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @description 链码校验值
     *
     * @var string
     */
    public $checksum;

    /**
     * @description 删除时间
     *
     * @var string
     */
    public $deleteTime;

    /**
     * @description 是否删除
     *
     * @var bool
     */
    public $deleted;

    /**
     * @description 安装时间
     *
     * @var string
     */
    public $installTime;

    /**
     * @description 链码label
     *
     * @var string
     */
    public $label;

    /**
     * @description 链码md5值
     *
     * @var string
     */
    public $md5sum;

    /**
     * @description 信息
     *
     * @var string
     */
    public $message;

    /**
     * @description 组织ID
     *
     * @var string
     */
    public $organizationId;

    /**
     * @description 链码包存放bucket内路径
     *
     * @var string
     */
    public $ossURL;

    /**
     * @description 上传者Bid
     *
     * @var string
     */
    public $providerBid;

    /**
     * @description 上传者Uid
     *
     * @var string
     */
    public $providerUid;

    /**
     * @description 链码状态
     *
     * @var string
     */
    public $state;

    /**
     * @description 链码类型
     *
     * @var int
     */
    public $type;

    /**
     * @description 链码类型
     *
     * @var string
     */
    public $typeName;

    /**
     * @description 上传时间
     *
     * @var string
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
        'message'            => 'Message',
        'organizationId'     => 'OrganizationId',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
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
     * @return ChaincodePackage
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
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
