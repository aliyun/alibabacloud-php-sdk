<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyImageAttributeRequest\features;
use AlibabaCloud\Tea\Model;

class ModifyImageAttributeRequest extends Model
{
    /**
     * @description The new boot mode of the custom image. Valid values:
     *
     *   BIOS
     *   UEFI
     *
     * >  You must know which boot modes the specified image supports. When you use this parameter to change the boot mode of the image, specify a boot mode supported by the image to ensure that instances which use this image can start normally.
     * @example BIOS
     *
     * @var string
     */
    public $bootMode;

    /**
     * @description The new description of the custom image. The description must be 2 to 256 characters in length and cannot start with http:// or https://.
     *
     * This parameter is empty by default, which indicates that the original description is retained.
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The attributes of the custom image.
     *
     * @var features
     */
    public $features;

    /**
     * @description The new name of the image family. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with acs: or aliyun. It cannot contain http:// or https://. It can contain letters, digits, periods (.), colons (:), underscores (\_), and hyphens (-).
     *
     * This parameter is empty by default.
     * @example hangzhou-daily-update
     *
     * @var string
     */
    public $imageFamily;

    /**
     * @description The ID of the custom image.
     *
     * @example m-bp18ygjuqnwhechc****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The new name of the custom image. The name must be 2 to 128 characters in length. It must start with a letter and cannot start with acs: or aliyun. It cannot contain http:// or https://. It can contain letters, digits, periods (.), colons (:), underscores (\_), and hyphens (-).
     *
     * This parameter is empty by default, which indicates that the original name is retained.
     * @example testImageName
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The type of the license to use to activate the operating system after the source image is imported. Valid values:
     *
     *   Auto: ECS checks the operating system of the source image and allocates a license to the operating system. ECS first checks whether the operating system distribution specified by `Platform` has a license allocated through an official Alibaba Cloud channel. If yes, the allocated license is used. If not, the license that comes with the source operating system is used.
     *   Aliyun: The license allocated through an official Alibaba Cloud channel is used for the operating system distribution specified by `Platform`.
     *   BYOL: The license that comes with the source operating system is used. In this case, make sure that your license key can be used in Alibaba Cloud.
     *
     * Default value: Auto.
     * @example Auto
     *
     * @var string
     */
    public $licenseType;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the custom image. You can call the [DescribeRegions](~~25609~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The new state of the custom image. Valid values:
     *
     *   Deprecated: puts the image into the Deprecated state. If the custom image is shared, you must unshare it before you can put it into the Deprecated state. Images in the Deprecated state cannot be shared or copied, but can be used to create instances or replace system disks.
     *   Available: puts the image into the Available state. You can restore an image from the Deprecated state to the Available state.
     *
     * >  If you want to roll back a custom image in the image family to a previous version, you can put the latest available custom image into the Deprecated state. An instance family cannot be used to create instances if no custom images are in the Available state within the instance family. Proceed with caution if only a single custom image is in the Available state within the image family.
     * @example Deprecated
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'bootMode'             => 'BootMode',
        'description'          => 'Description',
        'features'             => 'Features',
        'imageFamily'          => 'ImageFamily',
        'imageId'              => 'ImageId',
        'imageName'            => 'ImageName',
        'licenseType'          => 'LicenseType',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bootMode) {
            $res['BootMode'] = $this->bootMode;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->features) {
            $res['Features'] = null !== $this->features ? $this->features->toMap() : null;
        }
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->licenseType) {
            $res['LicenseType'] = $this->licenseType;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyImageAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BootMode'])) {
            $model->bootMode = $map['BootMode'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Features'])) {
            $model->features = features::fromMap($map['Features']);
        }
        if (isset($map['ImageFamily'])) {
            $model->imageFamily = $map['ImageFamily'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['LicenseType'])) {
            $model->licenseType = $map['LicenseType'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
