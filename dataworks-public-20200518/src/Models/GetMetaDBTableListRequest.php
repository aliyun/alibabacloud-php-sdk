<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaDBTableListRequest extends Model
{
    /**
     * @description The name of the metadatabase.
     *
     * @example odps.testProjectName
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description The type of the data source. Valid values: odps and emr.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The business data.
     *
     * @example odps
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The ID of the request.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;

    /**
     * @description The globally unique identifier (GUID) of the MaxCompute project. Specify the GUID in the `odps.{projectName}` format. This parameter must be configured if you set the DataSourceType parameter to odps.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the E-MapReduce (EMR) cluster. This parameter must be configured if you set the DataSourceType parameter to emr.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'appGuid'        => 'AppGuid',
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'databaseName'   => 'DatabaseName',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaDBTableListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
