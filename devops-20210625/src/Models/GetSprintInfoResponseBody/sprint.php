<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetSprintInfoResponseBody;

use AlibabaCloud\Tea\Model;

class sprint extends Model
{
    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $creator;

    /**
     * @example xxx
     *
     * @var string
     */
    public $description;

    /**
     * @example 1623916393000
     *
     * @var int
     */
    public $endDate;

    /**
     * @example 1623916393000
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @example 1623916393000
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @example e8bxxxxxxxxxxxxxxxx23
     *
     * @var string
     */
    public $identifier;

    /**
     * @example 19xx7043xxxxxxx914
     *
     * @var string
     */
    public $modifier;

    /**
     * @example demo示例项目
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $owners;

    /**
     * @example public
     *
     * @var string
     */
    public $scope;

    /**
     * @example 5e70xxxxxxcd000xxxxe96
     *
     * @var string
     */
    public $spaceIdentifier;

    /**
     * @example 1638403200000
     *
     * @var int
     */
    public $startDate;

    /**
     * @example Todo
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
        'owners'          => 'owners',
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
        if (null !== $this->owners) {
            $res['owners'] = $this->owners;
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
        if (isset($map['owners'])) {
            if (!empty($map['owners'])) {
                $model->owners = $map['owners'];
            }
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
