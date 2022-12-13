<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Tea\Model;

class DataSourceItem extends Model
{
    /**
     * @example data-20210114104214-vf9lowjt3pso
     *
     * @var string
     */
    public $dataSourceId;

    /**
     * @example nas
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @example data source of dlc examples
     *
     * @var string
     */
    public $description;

    /**
     * @example nas-data
     *
     * @var string
     */
    public $displayName;

    /**
     * @example oss-cn-beijing-internal.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example 2021-01-12T14:35:00Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-12T14:36:00Z
     *
     * @var string
     */
    public $gmtModifyTime;

    /**
     * @example /root/data/
     *
     * @var string
     */
    public $mountPath;

    /**
     * @example {"key": "value"}
     *
     * @var string
     */
    public $options;

    /**
     * @example oss://mybucket/path/to/dir
     *
     * @var string
     */
    public $path;

    /**
     * @example 123456789
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'dataSourceId'   => 'DataSourceId',
        'dataSourceType' => 'DataSourceType',
        'description'    => 'Description',
        'displayName'    => 'DisplayName',
        'endpoint'       => 'Endpoint',
        'fileSystemId'   => 'FileSystemId',
        'gmtCreateTime'  => 'GmtCreateTime',
        'gmtModifyTime'  => 'GmtModifyTime',
        'mountPath'      => 'MountPath',
        'options'        => 'Options',
        'path'           => 'Path',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifyTime) {
            $res['GmtModifyTime'] = $this->gmtModifyTime;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSourceItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifyTime'])) {
            $model->gmtModifyTime = $map['GmtModifyTime'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
