<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListImageBaseInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $distro;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageName;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $latestVersionId;

    /**
     * @var string
     */
    public $onlineVersionId;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'aliUid' => 'AliUid',
        'bizType' => 'BizType',
        'description' => 'Description',
        'distro' => 'Distro',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'imageType' => 'ImageType',
        'latestVersionId' => 'LatestVersionId',
        'onlineVersionId' => 'OnlineVersionId',
        'osType' => 'OsType',
        'packageType' => 'PackageType',
        'productType' => 'ProductType',
        'protocolType' => 'ProtocolType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->distro) {
            $res['Distro'] = $this->distro;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }

        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }

        if (null !== $this->latestVersionId) {
            $res['LatestVersionId'] = $this->latestVersionId;
        }

        if (null !== $this->onlineVersionId) {
            $res['OnlineVersionId'] = $this->onlineVersionId;
        }

        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }

        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Distro'])) {
            $model->distro = $map['Distro'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }

        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }

        if (isset($map['LatestVersionId'])) {
            $model->latestVersionId = $map['LatestVersionId'];
        }

        if (isset($map['OnlineVersionId'])) {
            $model->onlineVersionId = $map['OnlineVersionId'];
        }

        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }

        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
