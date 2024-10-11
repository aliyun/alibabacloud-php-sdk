<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\devDataSourceCreate;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\prodDataSourceCreate;
use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @var devDataSourceCreate
     */
    public $devDataSourceCreate;

    /**
     * @description 数据源创建结构体
     *
     * @var prodDataSourceCreate
     */
    public $prodDataSourceCreate;
    protected $_name = [
        'devDataSourceCreate'  => 'DevDataSourceCreate',
        'prodDataSourceCreate' => 'ProdDataSourceCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->devDataSourceCreate) {
            $res['DevDataSourceCreate'] = null !== $this->devDataSourceCreate ? $this->devDataSourceCreate->toMap() : null;
        }
        if (null !== $this->prodDataSourceCreate) {
            $res['ProdDataSourceCreate'] = null !== $this->prodDataSourceCreate ? $this->prodDataSourceCreate->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DevDataSourceCreate'])) {
            $model->devDataSourceCreate = devDataSourceCreate::fromMap($map['DevDataSourceCreate']);
        }
        if (isset($map['ProdDataSourceCreate'])) {
            $model->prodDataSourceCreate = prodDataSourceCreate::fromMap($map['ProdDataSourceCreate']);
        }

        return $model;
    }
}
