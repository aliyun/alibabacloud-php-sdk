<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images\imageInfo\baseOsTag;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCommunityImagesResponseBody\images\imageInfo\osTag;
use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @description The tag of the BOS image.
     *
     * @var baseOsTag
     */
    public $baseOsTag;

    /**
     * @description The description of the image.
     *
     * @example ExampleDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The image ID.
     *
     * @example m-bp181x855551ww5yq****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example linux_CentOS7.2_OceanBase_OBD_1ECS-3OB_3.0
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The image type. Valid values:
     *
     *   self: custom image
     *   others: shared image
     *
     * @example self
     *
     * @var string
     */
    public $imageOwnerAlias;

    /**
     * @description An array of OS images that are supported by E-HPC.
     *
     * @var osTag
     */
    public $osTag;

    /**
     * @description The script that is run after the image is installed.
     *
     * @example example.sh
     *
     * @var string
     */
    public $postInstallScript;

    /**
     * @description The billing unit of the image. Valid values:
     *
     *   Hour
     *   Month
     *   Year
     *
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @description The product code in Alibaba Cloud Marketplace.
     *
     * @example cmjj028279
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The size of the image. Unit: GiB.
     *
     * @example 40
     *
     * @var int
     */
    public $size;

    /**
     * @description The stock keeping unit (SKU) of the image. Valid values:
     *
     *   ECS: pay-as-you-go
     *   package: subscription
     *
     * @example ECS
     *
     * @var string
     */
    public $skuCode;

    /**
     * @description The state of the image. Valid values:
     *
     *   UnAvailable
     *   Available
     *   Creating
     *   CreateFailed
     *
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @description The owner of the image.
     *
     * @example 127****
     *
     * @var string
     */
    public $uid;
    protected $_name = [
        'baseOsTag'         => 'BaseOsTag',
        'description'       => 'Description',
        'imageId'           => 'ImageId',
        'imageName'         => 'ImageName',
        'imageOwnerAlias'   => 'ImageOwnerAlias',
        'osTag'             => 'OsTag',
        'postInstallScript' => 'PostInstallScript',
        'pricingCycle'      => 'PricingCycle',
        'productCode'       => 'ProductCode',
        'size'              => 'Size',
        'skuCode'           => 'SkuCode',
        'status'            => 'Status',
        'uid'               => 'Uid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseOsTag) {
            $res['BaseOsTag'] = null !== $this->baseOsTag ? $this->baseOsTag->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->imageOwnerAlias) {
            $res['ImageOwnerAlias'] = $this->imageOwnerAlias;
        }
        if (null !== $this->osTag) {
            $res['OsTag'] = null !== $this->osTag ? $this->osTag->toMap() : null;
        }
        if (null !== $this->postInstallScript) {
            $res['PostInstallScript'] = $this->postInstallScript;
        }
        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseOsTag'])) {
            $model->baseOsTag = baseOsTag::fromMap($map['BaseOsTag']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['ImageOwnerAlias'])) {
            $model->imageOwnerAlias = $map['ImageOwnerAlias'];
        }
        if (isset($map['OsTag'])) {
            $model->osTag = osTag::fromMap($map['OsTag']);
        }
        if (isset($map['PostInstallScript'])) {
            $model->postInstallScript = $map['PostInstallScript'];
        }
        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
