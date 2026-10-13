<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class AgenticResourceOwner extends Model
{
    /**
     * @var string
     */
    public $catalogAlias;

    /**
     * @var string
     */
    public $catalogDataSourceType;

    /**
     * @var string
     */
    public $catalogEnvType;

    /**
     * @var string
     */
    public $catalogHost;

    /**
     * @var string
     */
    public $catalogPort;

    /**
     * @var string
     */
    public $catalogUuid;

    /**
     * @var string
     */
    public $dataSourceUuid;

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
        'catalogAlias' => 'CatalogAlias',
        'catalogDataSourceType' => 'CatalogDataSourceType',
        'catalogEnvType' => 'CatalogEnvType',
        'catalogHost' => 'CatalogHost',
        'catalogPort' => 'CatalogPort',
        'catalogUuid' => 'CatalogUuid',
        'dataSourceUuid' => 'DataSourceUuid',
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
        if (null !== $this->catalogAlias) {
            $res['CatalogAlias'] = $this->catalogAlias;
        }

        if (null !== $this->catalogDataSourceType) {
            $res['CatalogDataSourceType'] = $this->catalogDataSourceType;
        }

        if (null !== $this->catalogEnvType) {
            $res['CatalogEnvType'] = $this->catalogEnvType;
        }

        if (null !== $this->catalogHost) {
            $res['CatalogHost'] = $this->catalogHost;
        }

        if (null !== $this->catalogPort) {
            $res['CatalogPort'] = $this->catalogPort;
        }

        if (null !== $this->catalogUuid) {
            $res['CatalogUuid'] = $this->catalogUuid;
        }

        if (null !== $this->dataSourceUuid) {
            $res['DataSourceUuid'] = $this->dataSourceUuid;
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
        if (isset($map['CatalogAlias'])) {
            $model->catalogAlias = $map['CatalogAlias'];
        }

        if (isset($map['CatalogDataSourceType'])) {
            $model->catalogDataSourceType = $map['CatalogDataSourceType'];
        }

        if (isset($map['CatalogEnvType'])) {
            $model->catalogEnvType = $map['CatalogEnvType'];
        }

        if (isset($map['CatalogHost'])) {
            $model->catalogHost = $map['CatalogHost'];
        }

        if (isset($map['CatalogPort'])) {
            $model->catalogPort = $map['CatalogPort'];
        }

        if (isset($map['CatalogUuid'])) {
            $model->catalogUuid = $map['CatalogUuid'];
        }

        if (isset($map['DataSourceUuid'])) {
            $model->dataSourceUuid = $map['DataSourceUuid'];
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
