<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tag\V20180828\Models;

use AlibabaCloud\Tea\Model;

class ListSupportResourceTypesRequest extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     * Maximum value: 1000. Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $maxResult;

    /**
     * @description The token that is used to start the next query.
     *
     * @example AAAAAYws9fJ0Ur4MGm/5OkDoW/Y3wDNwUdssyKODK****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The service code. This parameter specifies a filter condition for the query.
     *
     * This parameter is obtained from the response.
     * @example ecs
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The region ID.
     *
     * For more information about region IDs, see [Endpoints](~~2330902~~).
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
     * @description The resource type. This parameter specifies a filter condition for the query.
     *
     * This parameter is obtained from the response.
     * @example instance
     *
     * @var string
     */
    public $resourceTye;

    /**
     * @description Specifies whether to return tag-related capability items. Valid values:
     *
     *   true: The system returns tag-related capability items.
     *   false (default value): The system does not return tag-related capability items.
     *
     * @example false
     *
     * @var bool
     */
    public $showItems;

    /**
     * @description The code of the tag-related capability item. This parameter specifies a filter condition for the query.
     *
     * For more information, see **Tag-related capability items**.
     * @example TAG_CONSOLE_SUPPORT
     *
     * @var string
     */
    public $supportCode;
    protected $_name = [
        'maxResult'            => 'MaxResult',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'productCode'          => 'ProductCode',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceTye'          => 'ResourceTye',
        'showItems'            => 'ShowItems',
        'supportCode'          => 'SupportCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResult) {
            $res['MaxResult'] = $this->maxResult;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceTye) {
            $res['ResourceTye'] = $this->resourceTye;
        }
        if (null !== $this->showItems) {
            $res['ShowItems'] = $this->showItems;
        }
        if (null !== $this->supportCode) {
            $res['SupportCode'] = $this->supportCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSupportResourceTypesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResult'])) {
            $model->maxResult = $map['MaxResult'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceTye'])) {
            $model->resourceTye = $map['ResourceTye'];
        }
        if (isset($map['ShowItems'])) {
            $model->showItems = $map['ShowItems'];
        }
        if (isset($map['SupportCode'])) {
            $model->supportCode = $map['SupportCode'];
        }

        return $model;
    }
}
