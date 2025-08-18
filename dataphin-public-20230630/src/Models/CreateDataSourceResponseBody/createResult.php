<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceResponseBody;

use AlibabaCloud\Dara\Model;

class createResult extends Model
{
    /**
     * @var int
     */
    public $devDataSourceId;

    /**
     * @var int
     */
    public $prodDataSourceId;
    protected $_name = [
        'devDataSourceId' => 'DevDataSourceId',
        'prodDataSourceId' => 'ProdDataSourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->devDataSourceId) {
            $res['DevDataSourceId'] = $this->devDataSourceId;
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
        if (isset($map['DevDataSourceId'])) {
            $model->devDataSourceId = $map['DevDataSourceId'];
        }

        if (isset($map['ProdDataSourceId'])) {
            $model->prodDataSourceId = $map['ProdDataSourceId'];
        }

        return $model;
    }
}
