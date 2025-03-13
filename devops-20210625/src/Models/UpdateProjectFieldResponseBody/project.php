<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateProjectFieldResponseBody\project\fieldList;
use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @example Project
     *
     * @var string
     */
    public $category;

    /**
     * @example Project
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $creator;

    /**
     * @example OJAY
     *
     * @var string
     */
    public $customCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var fieldList[]
     */
    public $fieldList;

    /**
     * @example 1623916393000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1684134690000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example https://xxxxxx.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example https://xxxxxx.png
     *
     * @var string
     */
    public $iconBig;

    /**
     * @example {"small":"https://xxxxxx.png","big":"https://img.yyyyyy.png"}
     *
     * @var string
     */
    public $iconGroup;

    /**
     * @example https://img.yyyyyy.png
     *
     * @var string
     */
    public $iconSmall;

    /**
     * @example 66893
     *
     * @var string
     */
    public $id;

    /**
     * @example 1e2ea73d24652d5874d001b351
     *
     * @var string
     */
    public $identifier;

    /**
     * @example e8b2xxxxxx2abdxxxxxxxx23
     *
     * @var string
     */
    public $identifierPath;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $logicalStatus;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 5e70xxxxxxcd000xxxxe96
     *
     * @var string
     */
    public $organizationIdentifier;

    /**
     * @example null
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @example public
     *
     * @var string
     */
    public $scope;

    /**
     * @example 8a40xxxxxxxxxxxxx64
     *
     * @var string
     */
    public $statusIdentifier;

    /**
     * @var string
     */
    public $statusName;

    /**
     * @example 8a4058a71159b68254......
     *
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @example null
     *
     * @var string
     */
    public $subType;

    /**
     * @example CustomProject
     *
     * @var string
     */
    public $typeIdentifier;
    protected $_name = [
        'category'               => 'category',
        'categoryIdentifier'     => 'categoryIdentifier',
        'creator'                => 'creator',
        'customCode'             => 'customCode',
        'description'            => 'description',
        'fieldList'              => 'fieldList',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'icon'                   => 'icon',
        'iconBig'                => 'iconBig',
        'iconGroup'              => 'iconGroup',
        'iconSmall'              => 'iconSmall',
        'id'                     => 'id',
        'identifier'             => 'identifier',
        'identifierPath'         => 'identifierPath',
        'logicalStatus'          => 'logicalStatus',
        'modifier'               => 'modifier',
        'name'                   => 'name',
        'organizationIdentifier' => 'organizationIdentifier',
        'parentIdentifier'       => 'parentIdentifier',
        'scope'                  => 'scope',
        'statusIdentifier'       => 'statusIdentifier',
        'statusName'             => 'statusName',
        'statusStageIdentifier'  => 'statusStageIdentifier',
        'subType'                => 'subType',
        'typeIdentifier'         => 'typeIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->customCode) {
            $res['customCode'] = $this->customCode;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->fieldList) {
            $res['fieldList'] = [];
            if (null !== $this->fieldList && \is_array($this->fieldList)) {
                $n = 0;
                foreach ($this->fieldList as $item) {
                    $res['fieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->iconBig) {
            $res['iconBig'] = $this->iconBig;
        }
        if (null !== $this->iconGroup) {
            $res['iconGroup'] = $this->iconGroup;
        }
        if (null !== $this->iconSmall) {
            $res['iconSmall'] = $this->iconSmall;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->identifierPath) {
            $res['identifierPath'] = $this->identifierPath;
        }
        if (null !== $this->logicalStatus) {
            $res['logicalStatus'] = $this->logicalStatus;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->organizationIdentifier) {
            $res['organizationIdentifier'] = $this->organizationIdentifier;
        }
        if (null !== $this->parentIdentifier) {
            $res['parentIdentifier'] = $this->parentIdentifier;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->statusIdentifier) {
            $res['statusIdentifier'] = $this->statusIdentifier;
        }
        if (null !== $this->statusName) {
            $res['statusName'] = $this->statusName;
        }
        if (null !== $this->statusStageIdentifier) {
            $res['statusStageIdentifier'] = $this->statusStageIdentifier;
        }
        if (null !== $this->subType) {
            $res['subType'] = $this->subType;
        }
        if (null !== $this->typeIdentifier) {
            $res['typeIdentifier'] = $this->typeIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['customCode'])) {
            $model->customCode = $map['customCode'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['fieldList'])) {
            if (!empty($map['fieldList'])) {
                $model->fieldList = [];
                $n                = 0;
                foreach ($map['fieldList'] as $item) {
                    $model->fieldList[$n++] = null !== $item ? fieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['iconBig'])) {
            $model->iconBig = $map['iconBig'];
        }
        if (isset($map['iconGroup'])) {
            $model->iconGroup = $map['iconGroup'];
        }
        if (isset($map['iconSmall'])) {
            $model->iconSmall = $map['iconSmall'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['identifierPath'])) {
            $model->identifierPath = $map['identifierPath'];
        }
        if (isset($map['logicalStatus'])) {
            $model->logicalStatus = $map['logicalStatus'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['organizationIdentifier'])) {
            $model->organizationIdentifier = $map['organizationIdentifier'];
        }
        if (isset($map['parentIdentifier'])) {
            $model->parentIdentifier = $map['parentIdentifier'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['statusIdentifier'])) {
            $model->statusIdentifier = $map['statusIdentifier'];
        }
        if (isset($map['statusName'])) {
            $model->statusName = $map['statusName'];
        }
        if (isset($map['statusStageIdentifier'])) {
            $model->statusStageIdentifier = $map['statusStageIdentifier'];
        }
        if (isset($map['subType'])) {
            $model->subType = $map['subType'];
        }
        if (isset($map['typeIdentifier'])) {
            $model->typeIdentifier = $map['typeIdentifier'];
        }

        return $model;
    }
}
