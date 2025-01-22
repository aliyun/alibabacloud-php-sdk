<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Dara\Model;

class ListPublicParametersRequest extends Model
{
    /**
     * @var string
     */
    public $createdDateAfter;
    /**
     * @var string
     */
    public $createdDateBefore;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $parameterType;
    /**
     * @var string
     */
    public $path;
    /**
     * @var bool
     */
    public $recursive;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $sortField;
    /**
     * @var string
     */
    public $sortOrder;
    protected $_name = [
        'createdDateAfter'  => 'CreatedDateAfter',
        'createdDateBefore' => 'CreatedDateBefore',
        'maxResults'        => 'MaxResults',
        'name'              => 'Name',
        'nextToken'         => 'NextToken',
        'parameterType'     => 'ParameterType',
        'path'              => 'Path',
        'recursive'         => 'Recursive',
        'regionId'          => 'RegionId',
        'sortField'         => 'SortField',
        'sortOrder'         => 'SortOrder',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdDateAfter) {
            $res['CreatedDateAfter'] = $this->createdDateAfter;
        }

        if (null !== $this->createdDateBefore) {
            $res['CreatedDateBefore'] = $this->createdDateBefore;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }

        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->recursive) {
            $res['Recursive'] = $this->recursive;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }

        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
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
        if (isset($map['CreatedDateAfter'])) {
            $model->createdDateAfter = $map['CreatedDateAfter'];
        }

        if (isset($map['CreatedDateBefore'])) {
            $model->createdDateBefore = $map['CreatedDateBefore'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }

        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['Recursive'])) {
            $model->recursive = $map['Recursive'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }

        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }

        return $model;
    }
}
