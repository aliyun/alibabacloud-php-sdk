<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaDBInfoRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example odps.some_engine_name
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description The business data returned.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The comment.
     *
     * @example emr
     *
     * @var string
     */
    public $dataSourceType;

    /**
     * @description The type of the metadatabase. Only hive is supported.
     *
     * @example abc
     *
     * @var string
     */
    public $databaseName;
    protected $_name = [
        'appGuid'        => 'AppGuid',
        'clusterId'      => 'ClusterId',
        'dataSourceType' => 'DataSourceType',
        'databaseName'   => 'DatabaseName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaDBInfoRequest
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

        return $model;
    }
}
