<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateSprintResponseBody;

use AlibabaCloud\Tea\Model;

class sprint extends Model
{
    /**
     * @description 创建人id
     *
     * @var string
     */
    public $creator;

    /**
     * @description 描述信息
     *
     * @var string
     */
    public $description;

    /**
     * @description 结束时间
     *
     * @var int
     */
    public $endDate;

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
     * @description 迭代唯一标识符
     *
     * @var string
     */
    public $identifier;

    /**
     * @description 修改人
     *
     * @var string
     */
    public $modifier;

    /**
     * @description 迭代名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 可见范围
     *
     * @var string
     */
    public $scope;

    /**
     * @description 项目id
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @description 开始时间
     *
     * @var int
     */
    public $startDate;

    /**
     * @description 状态
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creator'         => 'creator',
        'description'     => 'description',
        'endDate'         => 'endDate',
        'gmtCreate'       => 'gmtCreate',
        'gmtModified'     => 'gmtModified',
        'identifier'      => 'identifier',
        'modifier'        => 'modifier',
        'name'            => 'name',
        'scope'           => 'scope',
        'spaceIdentifier' => 'spaceIdentifier',
        'startDate'       => 'startDate',
        'status'          => 'status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->endDate) {
            $res['endDate'] = $this->endDate;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->spaceIdentifier) {
            $res['spaceIdentifier'] = $this->spaceIdentifier;
        }
        if (null !== $this->startDate) {
            $res['startDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sprint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['endDate'])) {
            $model->endDate = $map['endDate'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['spaceIdentifier'])) {
            $model->spaceIdentifier = $map['spaceIdentifier'];
        }
        if (isset($map['startDate'])) {
            $model->startDate = $map['startDate'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
