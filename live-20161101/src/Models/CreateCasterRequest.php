<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\CreateCasterRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateCasterRequest extends Model
{
    /**
     * @description The name of the production studio.
     *
     * @example liveCaster****
     *
     * @var string
     */
    public $casterName;

    /**
     * @description The preset resolution of the production studio. If the subscription billing method is used, this parameter supports the following valid values:
     *
     *   **lp_ld**: low definition
     *   **lp_sd**: standard definition
     *   **lp_hd**: high definition
     *   **lp_ud**: ultra high definition
     *   **lp_ld_v**: low definition (portrait mode)
     *   **lp_sd_v**: standard definition (portrait mode)
     *   **lp_hd_v**: high definition (portrait mode)
     *   **lp_ud_v**: ultra high definition (portrait mode)
     *
     * >  If the pay-as-you-go billing method is used, you must call the [SetCasterConfig](https://help.aliyun.com/document_detail/60271.html) operation to specify the resolution.
     *
     * @example lp_sd
     *
     * @var string
     */
    public $casterTemplate;

    /**
     * @description The billing method. Only the pay-as-you-go billing method is supported.**** Valid values:
     *
     *   **PrePaid**: subscription. This billing method is not yet supported.
     *   **PostPaid**: pay-as-you-go
     *
     * This parameter is required.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can specify a custom value for this parameter, but you must make sure that the value is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * This parameter is required.
     *
     * @example 53200b81-b761-4c10-842a-a0726d97****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The expiration time of the production studio. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  This parameter is valid only if you set the **ChargeType** parameter to **PrePaid**.
     *
     * @example 2017-08-22T12:10:10Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The type of the production studio. Valid values:
     *
     *   **1**: general mode
     *   **6**: playlist mode (for carousel playback)
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $normType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The time when the production studio was purchased. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  This parameter is valid only if you set the **ChargeType** parameter to **PrePaid**.
     *
     * @example 2017-08-20T12:10:10Z
     *
     * @var string
     */
    public $purchaseTime;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. For more information about resource groups, see [Resource groups](https://help.aliyun.com/document_detail/2381067.html).
     *
     * @example rg-aekzw******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'casterName' => 'CasterName',
        'casterTemplate' => 'CasterTemplate',
        'chargeType' => 'ChargeType',
        'clientToken' => 'ClientToken',
        'expireTime' => 'ExpireTime',
        'normType' => 'NormType',
        'ownerId' => 'OwnerId',
        'purchaseTime' => 'PurchaseTime',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterName) {
            $res['CasterName'] = $this->casterName;
        }
        if (null !== $this->casterTemplate) {
            $res['CasterTemplate'] = $this->casterTemplate;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->normType) {
            $res['NormType'] = $this->normType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->purchaseTime) {
            $res['PurchaseTime'] = $this->purchaseTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCasterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterName'])) {
            $model->casterName = $map['CasterName'];
        }
        if (isset($map['CasterTemplate'])) {
            $model->casterTemplate = $map['CasterTemplate'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['NormType'])) {
            $model->normType = $map['NormType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PurchaseTime'])) {
            $model->purchaseTime = $map['PurchaseTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
