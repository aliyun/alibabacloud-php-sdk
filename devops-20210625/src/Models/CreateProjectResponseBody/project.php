<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description 空间大类
     *
     * @var string
     */
    public $category;

    /**
     * @description 空间大类id
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @description 创建人id
     *
     * @var string
     */
    public $creator;

    /**
     * @description 自定义编号
     *
     * @var string
     */
    public $customCode;

    /**
     * @description 描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 图标
     *
     * @var string
     */
    public $icon;

    /**
     * @description 大图标
     *
     * @var string
     */
    public $iconBig;

    /**
     * @description 图表组，json格式字符串
     *
     * @var string
     */
    public $iconGroup;

    /**
     * @description 小图标
     *
     * @var string
     */
    public $iconSmall;

    /**
     * @description 项目id
     *
     * @var string
     */
    public $id;

    /**
     * @description 项目唯一标识符
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 空间路径
     *
     * @var string
     */
    public $identifierPath;

    /**
     * @description 项目状态
     *
     * @var string
     */
    public $logicalStatus;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifier;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 企业id
     *
     * @var string
     */
    public $organizationIdentifier;

    /**
     * @description 父项目id
     *
     * @var string
     */
    public $parentIdentifier;

    /**
     * @description 可见范围
     *
     * @var string
     */
    public $scope;

    /**
     * @description 状态id
     *
     * @var string
     */
    public $statusIdentifier;

    /**
     * @description 状态阶段
     *
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @description 空间小类
     *
     * @var string
     */
    public $subType;

    /**
     * @description 空间小类id
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
