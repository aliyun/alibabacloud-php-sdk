<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;

class EnableCollectionGraphRAGShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $collection;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string
     */
    public $entityTypesShrink;

    /**
     * @var string
     */
    public $LLMModel;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $managerAccount;

    /**
     * @var string
     */
    public $managerAccountPassword;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespacePassword;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relationshipTypesShrink;
    protected $_name = [
        'collection' => 'Collection',
        'DBInstanceId' => 'DBInstanceId',
        'entityTypesShrink' => 'EntityTypes',
        'LLMModel' => 'LLMModel',
        'language' => 'Language',
        'managerAccount' => 'ManagerAccount',
        'managerAccountPassword' => 'ManagerAccountPassword',
        'namespace' => 'Namespace',
        'namespacePassword' => 'NamespacePassword',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'relationshipTypesShrink' => 'RelationshipTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collection) {
            $res['Collection'] = $this->collection;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->entityTypesShrink) {
            $res['EntityTypes'] = $this->entityTypesShrink;
        }

        if (null !== $this->LLMModel) {
            $res['LLMModel'] = $this->LLMModel;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->managerAccount) {
            $res['ManagerAccount'] = $this->managerAccount;
        }

        if (null !== $this->managerAccountPassword) {
            $res['ManagerAccountPassword'] = $this->managerAccountPassword;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->namespacePassword) {
            $res['NamespacePassword'] = $this->namespacePassword;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relationshipTypesShrink) {
            $res['RelationshipTypes'] = $this->relationshipTypesShrink;
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
        if (isset($map['Collection'])) {
            $model->collection = $map['Collection'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['EntityTypes'])) {
            $model->entityTypesShrink = $map['EntityTypes'];
        }

        if (isset($map['LLMModel'])) {
            $model->LLMModel = $map['LLMModel'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ManagerAccount'])) {
            $model->managerAccount = $map['ManagerAccount'];
        }

        if (isset($map['ManagerAccountPassword'])) {
            $model->managerAccountPassword = $map['ManagerAccountPassword'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['NamespacePassword'])) {
            $model->namespacePassword = $map['NamespacePassword'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelationshipTypes'])) {
            $model->relationshipTypesShrink = $map['RelationshipTypes'];
        }

        return $model;
    }
}
