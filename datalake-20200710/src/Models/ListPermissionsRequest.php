<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class ListPermissionsRequest extends Model
{
    /**
     * @description CatalogId
     *
     * @example 1344371
     *
     * @var string
     */
    public $catalogId;

    /**
     * @example false
     *
     * @var bool
     */
    public $isListUserRolePermissions;

    /**
     * @var MetaResource
     */
    public $metaResource;

    /**
     * @example DATABASE
     *
     * @var string
     */
    public $metaResourceType;

    /**
     * @example token!
     *
     * @var string
     */
    public $nextPageToken;

    /**
     * @example 100
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var Principal
     */
    public $principal;

    /**
     * @description This parameter is required.
     *
     * @example Hive
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'catalogId'                 => 'CatalogId',
        'isListUserRolePermissions' => 'IsListUserRolePermissions',
        'metaResource'              => 'MetaResource',
        'metaResourceType'          => 'MetaResourceType',
        'nextPageToken'             => 'NextPageToken',
        'pageSize'                  => 'PageSize',
        'principal'                 => 'Principal',
        'type'                      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['CatalogId'] = $this->catalogId;
        }
        if (null !== $this->isListUserRolePermissions) {
            $res['IsListUserRolePermissions'] = $this->isListUserRolePermissions;
        }
        if (null !== $this->metaResource) {
            $res['MetaResource'] = null !== $this->metaResource ? $this->metaResource->toMap() : null;
        }
        if (null !== $this->metaResourceType) {
            $res['MetaResourceType'] = $this->metaResourceType;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->principal) {
            $res['Principal'] = null !== $this->principal ? $this->principal->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogId'])) {
            $model->catalogId = $map['CatalogId'];
        }
        if (isset($map['IsListUserRolePermissions'])) {
            $model->isListUserRolePermissions = $map['IsListUserRolePermissions'];
        }
        if (isset($map['MetaResource'])) {
            $model->metaResource = MetaResource::fromMap($map['MetaResource']);
        }
        if (isset($map['MetaResourceType'])) {
            $model->metaResourceType = $map['MetaResourceType'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Principal'])) {
            $model->principal = Principal::fromMap($map['Principal']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
