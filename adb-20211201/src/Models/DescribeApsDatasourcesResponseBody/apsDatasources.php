<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourcesResponseBody;

use AlibabaCloud\Tea\Model;

class apsDatasources extends Model
{
    /**
     * @example 2024-01-10 14:44:33
     *
     * @var string
     */
    public $createTime;

    /**
     * @example test
     *
     * @var string
     */
    public $datasourceDescription;

    /**
     * @example 1
     *
     * @var int
     */
    public $datasourceId;

    /**
     * @example test
     *
     * @var string
     */
    public $datasourceName;

    /**
     * @example SLS
     *
     * @var string
     */
    public $datasourceType;

    /**
     * @example false
     *
     * @var bool
     */
    public $hasJob;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'datasourceDescription' => 'DatasourceDescription',
        'datasourceId'          => 'DatasourceId',
        'datasourceName'        => 'DatasourceName',
        'datasourceType'        => 'DatasourceType',
        'hasJob'                => 'HasJob',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->datasourceDescription) {
            $res['DatasourceDescription'] = $this->datasourceDescription;
        }
        if (null !== $this->datasourceId) {
            $res['DatasourceId'] = $this->datasourceId;
        }
        if (null !== $this->datasourceName) {
            $res['DatasourceName'] = $this->datasourceName;
        }
        if (null !== $this->datasourceType) {
            $res['DatasourceType'] = $this->datasourceType;
        }
        if (null !== $this->hasJob) {
            $res['HasJob'] = $this->hasJob;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apsDatasources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DatasourceDescription'])) {
            $model->datasourceDescription = $map['DatasourceDescription'];
        }
        if (isset($map['DatasourceId'])) {
            $model->datasourceId = $map['DatasourceId'];
        }
        if (isset($map['DatasourceName'])) {
            $model->datasourceName = $map['DatasourceName'];
        }
        if (isset($map['DatasourceType'])) {
            $model->datasourceType = $map['DatasourceType'];
        }
        if (isset($map['HasJob'])) {
            $model->hasJob = $map['HasJob'];
        }

        return $model;
    }
}
