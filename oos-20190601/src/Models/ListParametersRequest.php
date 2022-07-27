<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListParametersRequest extends Model
{
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
    public $resourceGroupId;

    /**
     * @var string
     */
    public $sortField;

    /**
     * @var string
     */
    public $sortOrder;

    /**
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'maxResults'      => 'MaxResults',
        'name'            => 'Name',
        'nextToken'       => 'NextToken',
        'path'            => 'Path',
        'recursive'       => 'Recursive',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'sortField'       => 'SortField',
        'sortOrder'       => 'SortOrder',
        'tags'            => 'Tags',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sortField) {
            $res['SortField'] = $this->sortField;
        }
        if (null !== $this->sortOrder) {
            $res['SortOrder'] = $this->sortOrder;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListParametersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SortField'])) {
            $model->sortField = $map['SortField'];
        }
        if (isset($map['SortOrder'])) {
            $model->sortOrder = $map['SortOrder'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
