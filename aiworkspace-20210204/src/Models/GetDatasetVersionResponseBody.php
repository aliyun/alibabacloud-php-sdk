<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class GetDatasetVersionResponseBody extends Model
{
    /**
     * @description 数据集的数据量
     *
     * @var int
     */
    public $dataCount;

    /**
     * @description 数据集版本的数据大小。
     *
     * @var int
     */
    public $dataSize;

    /**
     * @description 数据源类型。支持以下取值：
     * This parameter is required.
     * @var string
     */
    public $dataSourceType;

    /**
     * @description 代表资源一级ID的资源属性字段
     *
     * @var string
     */
    public $datasetId;

    /**
     * @description 数据集版本的描述信息。
     *
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @description 创建时间。
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @description 代表资源标签的资源属性字段
     *
     * @var Label[]
     */
    public $labels;

    /**
     * @description 扩展字段，JsonString类型。
     * 当DLC使用数据集时，可通过配置mountPath字段指定数据集默认挂载路径。
     * @var string
     */
    public $options;

    /**
     * @description 数据集的属性。支持以下取值：
     * This parameter is required.
     * @var string
     */
    public $property;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @description 数据来源ID。
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description 数据来源类型，默认为USER。支持以下取值：
     * - USER：用户注册的数据集。
     * @var string
     */
    public $sourceType;

    /**
     * @description Uri配置样例如下：
     * This parameter is required.
     * @var string
     */
    public $uri;

    /**
     * @description 代表资源名称的资源属性字段
     *
     * @var string
     */
    public $versionName;
    protected $_name = [
        'dataCount'       => 'DataCount',
        'dataSize'        => 'DataSize',
        'dataSourceType'  => 'DataSourceType',
        'datasetId'       => 'DatasetId',
        'description'     => 'Description',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labels'          => 'Labels',
        'options'         => 'Options',
        'property'        => 'Property',
        'requestId'       => 'RequestId',
        'sourceId'        => 'SourceId',
        'sourceType'      => 'SourceType',
        'uri'             => 'Uri',
        'versionName'     => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataCount) {
            $res['DataCount'] = $this->dataCount;
        }
        if (null !== $this->dataSize) {
            $res['DataSize'] = $this->dataSize;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->property) {
            $res['Property'] = $this->property;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDatasetVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataCount'])) {
            $model->dataCount = $map['DataCount'];
        }
        if (isset($map['DataSize'])) {
            $model->dataSize = $map['DataSize'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Property'])) {
            $model->property = $map['Property'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
