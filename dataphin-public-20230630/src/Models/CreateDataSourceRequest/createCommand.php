<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\devDataSourceCreate;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceRequest\createCommand\prodDataSourceCreate;

class createCommand extends Model
{
    /**
     * @var devDataSourceCreate
     */
    public $devDataSourceCreate;

    /**
     * @var prodDataSourceCreate
     */
    public $prodDataSourceCreate;
    protected $_name = [
        'devDataSourceCreate' => 'DevDataSourceCreate',
        'prodDataSourceCreate' => 'ProdDataSourceCreate',
    ];

    public function validate()
    {
        if (null !== $this->devDataSourceCreate) {
            $this->devDataSourceCreate->validate();
        }
        if (null !== $this->prodDataSourceCreate) {
            $this->prodDataSourceCreate->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devDataSourceCreate) {
            $res['DevDataSourceCreate'] = null !== $this->devDataSourceCreate ? $this->devDataSourceCreate->toArray($noStream) : $this->devDataSourceCreate;
        }

        if (null !== $this->prodDataSourceCreate) {
            $res['ProdDataSourceCreate'] = null !== $this->prodDataSourceCreate ? $this->prodDataSourceCreate->toArray($noStream) : $this->prodDataSourceCreate;
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
        if (isset($map['DevDataSourceCreate'])) {
            $model->devDataSourceCreate = devDataSourceCreate::fromMap($map['DevDataSourceCreate']);
        }

        if (isset($map['ProdDataSourceCreate'])) {
            $model->prodDataSourceCreate = prodDataSourceCreate::fromMap($map['ProdDataSourceCreate']);
        }

        return $model;
    }
}
