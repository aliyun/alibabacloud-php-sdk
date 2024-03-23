<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListDatasetsRequest extends Model
{
    /**
     * @example OSS
     *
     * @var string
     */
    public $dataSourceTypes;

    /**
     * @example COMMON,TEXT
     *
     * @var string
     */
    public $dataTypes;

    /**
     * @example test
     *
     * @var string
     */
    public $label;

    /**
     * @example myName
     *
     * @var string
     */
    public $name;

    /**
     * @example ASC
     *
     * @var string
     */
    public $order;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example FILE
     *
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $provider;

    /**
     * @example d-rbvg5wzljzjhc9ks92
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example USER,ITAG
     *
     * @var string
     */
    public $sourceTypes;

    /**
     * @example 324**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dataSourceTypes' => 'DataSourceTypes',
        'dataTypes'       => 'DataTypes',
        'label'           => 'Label',
        'name'            => 'Name',
        'order'           => 'Order',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'properties'      => 'Properties',
        'provider'        => 'Provider',
        'sourceId'        => 'SourceId',
        'sourceTypes'     => 'SourceTypes',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceTypes) {
            $res['DataSourceTypes'] = $this->dataSourceTypes;
        }
        if (null !== $this->dataTypes) {
            $res['DataTypes'] = $this->dataTypes;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceTypes) {
            $res['SourceTypes'] = $this->sourceTypes;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceTypes'])) {
            $model->dataSourceTypes = $map['DataSourceTypes'];
        }
        if (isset($map['DataTypes'])) {
            $model->dataTypes = $map['DataTypes'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceTypes'])) {
            $model->sourceTypes = $map['SourceTypes'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
