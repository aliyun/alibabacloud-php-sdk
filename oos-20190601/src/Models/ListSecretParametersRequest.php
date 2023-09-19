<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class ListSecretParametersRequest extends Model
{
    /**
     * @description The number of entries per page. Valid values: 10 to 100. Default value: 50.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the parameter. **You can enter a keyword to query parameter names in fuzzy match mode.
     *
     * @example MySecretParameter
     *
     * @var string
     */
    public $name;

    /**
     * @description The token that is used to retrieve the next page of results.
     *
     * @example sPH90GZOVGC6KPDUL0FIIbEtMQHq_19S6_4O_XqA
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The path of the parameter. For example, if the name of a parameter is /path/path1/Myparameter, the path of the parameter is /path/path1/.
     *
     * @example /path1/path2/
     *
     * @var string
     */
    public $path;

    /**
     * @description Specifies whether to query parameters from all levels of directories in the specified path. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $recursive;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxsn4m4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The field used to sort the query results. Valid values:
     *
     *   Name
     *   CreatedDate
     *
     * @example Name
     *
     * @var string
     */
    public $sortField;

    /**
     * @description The order in which the entries are sorted. Valid values:
     *
     *   Ascending
     *   Descending (Default)
     *
     * @example Descending
     *
     * @var string
     */
    public $sortOrder;

    /**
     * @description The tags of the parameter.
     *
     * @example {"k1": "v1", "k2": "v2"}
     *
     * @var mixed[]
     */
    public $tags;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSecretParametersRequest
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

        return $model;
    }
}
