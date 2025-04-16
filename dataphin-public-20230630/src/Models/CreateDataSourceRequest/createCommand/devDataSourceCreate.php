<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\devDataSourceCreate\dataSourceCreate;

class devDataSourceCreate extends Model
{
    /**
     * @var dataSourceCreate
     */
    public $dataSourceCreate;

    /**
     * @var int
     */
    public $prodDataSourceId;
    protected $_name = [
        'dataSourceCreate' => 'DataSourceCreate',
        'prodDataSourceId' => 'ProdDataSourceId',
    ];

    public function validate()
    {
        if (null !== $this->dataSourceCreate) {
            $this->dataSourceCreate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSourceCreate) {
            $res['DataSourceCreate'] = null !== $this->dataSourceCreate ? $this->dataSourceCreate->toArray($noStream) : $this->dataSourceCreate;
        }

        if (null !== $this->prodDataSourceId) {
            $res['ProdDataSourceId'] = $this->prodDataSourceId;
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
        if (isset($map['DataSourceCreate'])) {
            $model->dataSourceCreate = dataSourceCreate::fromMap($map['DataSourceCreate']);
        }

        if (isset($map['ProdDataSourceId'])) {
            $model->prodDataSourceId = $map['ProdDataSourceId'];
        }

        return $model;
    }
}
