<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class ListProductRequest extends Model
{
    /**
     * @description The cursor that points to the end of the page of the returned data.
     *
     * @example kdkii48jfjjei3
     *
     * @var string
     */
    public $after;

    /**
     * @description The cursor that points to the beginning of the page of the returned data.
     *
     * @example wiidkd939kek93
     *
     * @var string
     */
    public $before;

    /**
     * @description The catalog ID.
     *
     * @example 29398389292
     *
     * @var string
     */
    public $catalogId;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example C29398388383
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The fields. Separate multiple fields with commas (,).
     *
     * see [product fields](~~2579419~~)
     * @example id,name
     *
     * @var string
     */
    public $fields;

    /**
     * @description The number of products to be queried. Valid values: 1 to 1000.
     *
     * @example 73
     *
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the WhatsApp Business account (WABA).
     *
     * @example 38487474747
     *
     * @var string
     */
    public $wabaId;
    protected $_name = [
        'after'                => 'After',
        'before'               => 'Before',
        'catalogId'            => 'CatalogId',
        'custSpaceId'          => 'CustSpaceId',
        'fields'               => 'Fields',
        'limit'                => 'Limit',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'wabaId'               => 'WabaId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->after) {
            $res['After'] = $this->after;
        }
        if (null !== $this->before) {
            $res['Before'] = $this->before;
        }
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->wabaId) {
            $res['WabaId'] = $this->wabaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['After'])) {
            $model->after = $map['After'];
        }
        if (isset($map['Before'])) {
            $model->before = $map['Before'];
        }
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['WabaId'])) {
            $model->wabaId = $map['WabaId'];
        }

        return $model;
    }
}
