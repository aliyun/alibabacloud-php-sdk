<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreateProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @var string
     */
    public $categoryIdentifier;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $customCode;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $logicalStatus;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $organizationIdentifier;

    /**
     * @var string
     */
    public $scope;

    /**
     * @var string
     */
    public $statusIdentifier;

    /**
     * @var string
     */
    public $statusStageIdentifier;

    /**
     * @var string
     */
    public $typeIdentifier;
    protected $_name = [
        'categoryIdentifier'     => 'categoryIdentifier',
        'creator'                => 'creator',
        'customCode'             => 'customCode',
        'description'            => 'description',
        'gmtCreate'              => 'gmtCreate',
        'gmtModified'            => 'gmtModified',
        'icon'                   => 'icon',
        'identifier'             => 'identifier',
        'logicalStatus'          => 'logicalStatus',
        'modifier'               => 'modifier',
        'name'                   => 'name',
        'organizationIdentifier' => 'organizationIdentifier',
        'scope'                  => 'scope',
        'statusIdentifier'       => 'statusIdentifier',
        'statusStageIdentifier'  => 'statusStageIdentifier',
        'typeIdentifier'         => 'typeIdentifier',
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
        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
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
        if (null !== $this->scope) {
            $res['scope'] = $this->scope;
        }
        if (null !== $this->statusIdentifier) {
            $res['statusIdentifier'] = $this->statusIdentifier;
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
     * @return project
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
        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
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
        if (isset($map['scope'])) {
            $model->scope = $map['scope'];
        }
        if (isset($map['statusIdentifier'])) {
            $model->statusIdentifier = $map['statusIdentifier'];
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
