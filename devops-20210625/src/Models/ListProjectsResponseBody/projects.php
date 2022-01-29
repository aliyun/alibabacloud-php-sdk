<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class projects extends Model
{
    /**
     * @description 类型
     *
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @description 创建人
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
     * @description 删除时间
     *
     * @var int
     */
    public $deleteTime;

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
     * @description 项目封面
     *
     * @var string
     */
    public $icon;

    /**
     * @description 项目唯一标识符
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 逻辑状态
     *
     * @var string
     */
    public $logicalStatus;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 公开还是私有
     *
     * @var string
     */
    public $scope;

    /**
     * @description 状态阶段
     *
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @description 类型id
     *
     * @var string
     */
    public $typeIdentifier;
    protected $_name = [
        'categoryIdentifier'    => 'categoryIdentifier',
        'creator'               => 'creator',
        'customCode'            => 'customCode',
        'deleteTime'            => 'deleteTime',
        'description'           => 'description',
        'gmtCreate'             => 'gmtCreate',
        'icon'                  => 'icon',
        'identifier'            => 'identifier',
        'logicalStatus'         => 'logicalStatus',
        'name'                  => 'name',
        'scope'                 => 'scope',
        'statusStageIdentifier' => 'statusStageIdentifier',
        'typeIdentifier'        => 'typeIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryIdentifier) {
            $res['categoryIdentifier'] = $this->categoryIdentifier;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->customCode) {
            $res['customCode'] = $this->customCode;
        }
        if (null !== $this->deleteTime) {
            $res['deleteTime'] = $this->deleteTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->logicalStatus) {
            $res['logicalStatus'] = $this->logicalStatus;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->statusStageIdentifier) {
            $res['statusStageIdentifier'] = $this->statusStageIdentifier;
        }
        if (null !== $this->typeIdentifier) {
            $res['typeIdentifier'] = $this->typeIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projects
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['categoryIdentifier'])) {
            $model->categoryIdentifier = $map['categoryIdentifier'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['customCode'])) {
            $model->customCode = $map['customCode'];
        }
        if (isset($map['deleteTime'])) {
            $model->deleteTime = $map['deleteTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['logicalStatus'])) {
            $model->logicalStatus = $map['logicalStatus'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['statusStageIdentifier'])) {
            $model->statusStageIdentifier = $map['statusStageIdentifier'];
        }
        if (isset($map['typeIdentifier'])) {
            $model->typeIdentifier = $map['typeIdentifier'];
        }

        return $model;
    }
}
