<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devopsrdc\V20200303\Models\GetDevopsProjectInfoResponseBody;

use AlibabaCloud\Tea\Model;

class object extends Model
{
    /**
     * @var string
     */
    public $sortMethod;

    /**
     * @var string
     */
    public $uniqueIdPrefix;

    /**
     * @var string
     */
    public $normalType;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var bool
     */
    public $isTemplate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $defaultRoleId;

    /**
     * @var string
     */
    public $rootCollectionId;

    /**
     * @var bool
     */
    public $isDeleted;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $isArchived;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $logo;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $pinyin;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $defaultCollectionId;

    /**
     * @var bool
     */
    public $isSuspended;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $visibility;

    /**
     * @var string
     */
    public $py;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $nextTaskUniqueId;

    /**
     * @var string
     */
    public $customfields;

    /**
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'sortMethod'          => 'SortMethod',
        'uniqueIdPrefix'      => 'UniqueIdPrefix',
        'normalType'          => 'NormalType',
        'modifierId'          => 'ModifierId',
        'sourceType'          => 'SourceType',
        'isTemplate'          => 'IsTemplate',
        'description'         => 'Description',
        'defaultRoleId'       => 'DefaultRoleId',
        'rootCollectionId'    => 'RootCollectionId',
        'isDeleted'           => 'IsDeleted',
        'updated'             => 'Updated',
        'name'                => 'Name',
        'isArchived'          => 'IsArchived',
        'endDate'             => 'EndDate',
        'logo'                => 'Logo',
        'startDate'           => 'StartDate',
        'pinyin'              => 'Pinyin',
        'creatorId'           => 'CreatorId',
        'sourceId'            => 'SourceId',
        'defaultCollectionId' => 'DefaultCollectionId',
        'isSuspended'         => 'IsSuspended',
        'organizationId'      => 'OrganizationId',
        'visibility'          => 'Visibility',
        'py'                  => 'Py',
        'category'            => 'Category',
        'nextTaskUniqueId'    => 'NextTaskUniqueId',
        'customfields'        => 'Customfields',
        'created'             => 'Created',
        'id'                  => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sortMethod) {
            $res['SortMethod'] = $this->sortMethod;
        }
        if (null !== $this->uniqueIdPrefix) {
            $res['UniqueIdPrefix'] = $this->uniqueIdPrefix;
        }
        if (null !== $this->normalType) {
            $res['NormalType'] = $this->normalType;
        }
        if (null !== $this->modifierId) {
            $res['ModifierId'] = $this->modifierId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->isTemplate) {
            $res['IsTemplate'] = $this->isTemplate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->defaultRoleId) {
            $res['DefaultRoleId'] = $this->defaultRoleId;
        }
        if (null !== $this->rootCollectionId) {
            $res['RootCollectionId'] = $this->rootCollectionId;
        }
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->updated) {
            $res['Updated'] = $this->updated;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->isArchived) {
            $res['IsArchived'] = $this->isArchived;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->logo) {
            $res['Logo'] = $this->logo;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->pinyin) {
            $res['Pinyin'] = $this->pinyin;
        }
        if (null !== $this->creatorId) {
            $res['CreatorId'] = $this->creatorId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->defaultCollectionId) {
            $res['DefaultCollectionId'] = $this->defaultCollectionId;
        }
        if (null !== $this->isSuspended) {
            $res['IsSuspended'] = $this->isSuspended;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->visibility) {
            $res['Visibility'] = $this->visibility;
        }
        if (null !== $this->py) {
            $res['Py'] = $this->py;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->nextTaskUniqueId) {
            $res['NextTaskUniqueId'] = $this->nextTaskUniqueId;
        }
        if (null !== $this->customfields) {
            $res['Customfields'] = $this->customfields;
        }
        if (null !== $this->created) {
            $res['Created'] = $this->created;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return object
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SortMethod'])) {
            $model->sortMethod = $map['SortMethod'];
        }
        if (isset($map['UniqueIdPrefix'])) {
            $model->uniqueIdPrefix = $map['UniqueIdPrefix'];
        }
        if (isset($map['NormalType'])) {
            $model->normalType = $map['NormalType'];
        }
        if (isset($map['ModifierId'])) {
            $model->modifierId = $map['ModifierId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['IsTemplate'])) {
            $model->isTemplate = $map['IsTemplate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DefaultRoleId'])) {
            $model->defaultRoleId = $map['DefaultRoleId'];
        }
        if (isset($map['RootCollectionId'])) {
            $model->rootCollectionId = $map['RootCollectionId'];
        }
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['Updated'])) {
            $model->updated = $map['Updated'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['IsArchived'])) {
            $model->isArchived = $map['IsArchived'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Logo'])) {
            $model->logo = $map['Logo'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Pinyin'])) {
            $model->pinyin = $map['Pinyin'];
        }
        if (isset($map['CreatorId'])) {
            $model->creatorId = $map['CreatorId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['DefaultCollectionId'])) {
            $model->defaultCollectionId = $map['DefaultCollectionId'];
        }
        if (isset($map['IsSuspended'])) {
            $model->isSuspended = $map['IsSuspended'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['Visibility'])) {
            $model->visibility = $map['Visibility'];
        }
        if (isset($map['Py'])) {
            $model->py = $map['Py'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['NextTaskUniqueId'])) {
            $model->nextTaskUniqueId = $map['NextTaskUniqueId'];
        }
        if (isset($map['Customfields'])) {
            $model->customfields = $map['Customfields'];
        }
        if (isset($map['Created'])) {
            $model->created = $map['Created'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
