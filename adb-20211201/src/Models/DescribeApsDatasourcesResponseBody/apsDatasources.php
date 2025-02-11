<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourcesResponseBody;

use AlibabaCloud\Dara\Model;

class apsDatasources extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $datasourceDescription;
    /**
     * @var int
     */
    public $datasourceId;
    /**
     * @var string
     */
    public $datasourceName;
    /**
     * @var string
     */
    public $datasourceType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
