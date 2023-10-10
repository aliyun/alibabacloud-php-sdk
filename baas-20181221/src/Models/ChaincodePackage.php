<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class ChaincodePackage extends Model
{
    /**
     * @example cmcc-1.5:227c3cd472a8a2fcaa1c63f15812a1894348a985dc723006dd47d9f2848d10ed
     *
     * @var string
     */
    public $chaincodePackageId;

    /**
     * @example 15bab12c29edbc095c33545b9867aec9be469c74a6dd5783df6ee74a24334c77
     *
     * @var string
     */
    public $checksum;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $deleteTime;

    /**
     * @example false
     *
     * @var bool
     */
    public $deleted;

    /**
     * @example 1533025590
     *
     * @var string
     */
    public $installTime;

    /**
     * @example label
     *
     * @var string
     */
    public $label;

    /**
     * @example N02eVKuRJDA2ODtieMUxVw==
     *
     * @var string
     */
    public $md5sum;

    /**
     * @example ok
     *
     * @var string
     */
    public $message;

    /**
     * @example peers-aaaaaa2-1eqnj5o5w9dt3
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example hi003/7efbe860-1a40-42c9-9e6b-0bc08d7ee3a4/cmcc.tar.gz
     *
     * @var string
     */
    public $ossURL;

    /**
     * @example 26842
     *
     * @var string
     */
    public $providerBid;

    /**
     * @example 1313158505072210
     *
     * @var string
     */
    public $providerUid;

    /**
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @example 0
     *
     * @var int
     */
    public $type;

    /**
     * @example golang
     *
     * @var string
     */
    public $typeName;

    /**
     * @example 1533025590
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
