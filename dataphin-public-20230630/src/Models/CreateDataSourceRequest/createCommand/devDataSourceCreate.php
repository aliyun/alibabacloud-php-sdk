<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\devDataSourceCreate\dataSourceCreate;
use AlibabaCloud\Tea\Model;

class devDataSourceCreate extends Model
{
    /**
     * @description 数据源创建结构体
     *
     * @var dataSourceCreate
     */
    public $dataSourceCreate;

    /**
     * @example 1011
     *
     * @var int
     */
    public $prodDataSourceId;
    protected $_name = [
        'dataSourceCreate' => 'DataSourceCreate',
        'prodDataSourceId' => 'ProdDataSourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSourceCreate) {
            $res['DataSourceCreate'] = null !== $this->dataSourceCreate ? $this->dataSourceCreate->toMap() : null;
        }
        if (null !== $this->prodDataSourceId) {
            $res['ProdDataSourceId'] = $this->prodDataSourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devDataSourceCreate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSourceCreate'])) {
            $model->dataSourceCreate = dataSourceCreate::fromMap($map['DataSourceCreate']);
        }
        if (isset($map['ProdDataSourceId'])) {
            $model->prodDataSourceId = $map['ProdDataSourceId'];
        }

        return $model;
    }
}
