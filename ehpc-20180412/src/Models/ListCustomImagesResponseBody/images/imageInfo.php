<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images\imageInfo\baseOsTag;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCustomImagesResponseBody\images\imageInfo\osTag;
use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @var baseOsTag
     */
    public $baseOsTag;

    /**
     * @var string
     */
    public $description;

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
    public $imageOwnerAlias;

    /**
     * @var osTag
     */
    public $osTag;

    /**
     * @var string
     */
    public $postInstallScript;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $skuCode;

    /**
     * @var string
     */
    public $status;

    /**
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
