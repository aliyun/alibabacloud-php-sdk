<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticResourceOwner extends Model
{
    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $databaseQualifiedName;

    /**
     * @var string
     */
    public $databaseUuid;

    /**
     * @var string
     */
    public $grantBy;

    /**
     * @var string
     */
    public $grantFrom;

    /**
     * @var string
     */
    public $ownerPrincipalId;

    /**
     * @var string
     */
    public $ownerPrincipalType;

    /**
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'catalogUuid' => 'CatalogUuid',
        'databaseQualifiedName' => 'DatabaseQualifiedName',
        'databaseUuid' => 'DatabaseUuid',
        'grantBy' => 'GrantBy',
        'grantFrom' => 'GrantFrom',
        'ownerPrincipalId' => 'OwnerPrincipalId',
        'ownerPrincipalType' => 'OwnerPrincipalType',
        'resourceType' => 'ResourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->databaseQualifiedName) {
            $res['DatabaseQualifiedName'] = $this->databaseQualifiedName;
        }

        if (null !== $this->databaseUuid) {
            $res['DatabaseUuid'] = $this->databaseUuid;
        }

        if (null !== $this->grantBy) {
            $res['GrantBy'] = $this->grantBy;
        }

        if (null !== $this->grantFrom) {
            $res['GrantFrom'] = $this->grantFrom;
        }

        if (null !== $this->ownerPrincipalId) {
            $res['OwnerPrincipalId'] = $this->ownerPrincipalId;
        }

        if (null !== $this->ownerPrincipalType) {
            $res['OwnerPrincipalType'] = $this->ownerPrincipalType;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DatabaseQualifiedName'])) {
            $model->databaseQualifiedName = $map['DatabaseQualifiedName'];
        }

        if (isset($map['DatabaseUuid'])) {
            $model->databaseUuid = $map['DatabaseUuid'];
        }

        if (isset($map['GrantBy'])) {
            $model->grantBy = $map['GrantBy'];
        }

        if (isset($map['GrantFrom'])) {
            $model->grantFrom = $map['GrantFrom'];
        }

        if (isset($map['OwnerPrincipalId'])) {
            $model->ownerPrincipalId = $map['OwnerPrincipalId'];
        }

        if (isset($map['OwnerPrincipalType'])) {
            $model->ownerPrincipalType = $map['OwnerPrincipalType'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
