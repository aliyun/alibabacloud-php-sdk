<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListDatasetsRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceTypes;
    /**
     * @var string
     */
    public $dataTypes;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $order;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $properties;
    /**
     * @var string
     */
    public $provider;
    /**
     * @var string
     */
    public $sortBy;
    /**
     * @var string
     */
    public $sourceDatasetId;
    /**
     * @var string
     */
    public $sourceId;
    /**
     * @var string
     */
    public $sourceTypes;
    /**
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
        'sortBy'          => 'SortBy',
        'sourceDatasetId' => 'SourceDatasetId',
        'sourceId'        => 'SourceId',
        'sourceTypes'     => 'SourceTypes',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }

        if (null !== $this->sourceDatasetId) {
            $res['SourceDatasetId'] = $this->sourceDatasetId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        if (isset($map['SourceDatasetId'])) {
            $model->sourceDatasetId = $map['SourceDatasetId'];
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
