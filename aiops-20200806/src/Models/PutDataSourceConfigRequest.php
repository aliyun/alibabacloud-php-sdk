<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class PutDataSourceConfigRequest extends Model
{
    /**
     * @var string
     */
    public $dataSourceDescribe;

    /**
     * @var string
     */
    public $dataSourceName;

    /**
     * @var string
     */
    public $dataSourceParams;

    /**
     * @var string
     */
    public $dataSourceParamsMapping;

    /**
     * @var int
     */
    public $dataSourceType;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'dataSourceDescribe'      => 'DataSourceDescribe',
        'dataSourceName'          => 'DataSourceName',
        'dataSourceParams'        => 'DataSourceParams',
        'dataSourceParamsMapping' => 'DataSourceParamsMapping',
        'dataSourceType'          => 'DataSourceType',
        'operaUid'                => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceDescribe) {
            $res['DataSourceDescribe'] = $this->dataSourceDescribe;
        }
        if (null !== $this->dataSourceName) {
            $res['DataSourceName'] = $this->dataSourceName;
        }
        if (null !== $this->dataSourceParams) {
            $res['DataSourceParams'] = $this->dataSourceParams;
        }
        if (null !== $this->dataSourceParamsMapping) {
            $res['DataSourceParamsMapping'] = $this->dataSourceParamsMapping;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutDataSourceConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceDescribe'])) {
            $model->dataSourceDescribe = $map['DataSourceDescribe'];
        }
        if (isset($map['DataSourceName'])) {
            $model->dataSourceName = $map['DataSourceName'];
        }
        if (isset($map['DataSourceParams'])) {
            $model->dataSourceParams = $map['DataSourceParams'];
        }
        if (isset($map['DataSourceParamsMapping'])) {
            $model->dataSourceParamsMapping = $map['DataSourceParamsMapping'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
