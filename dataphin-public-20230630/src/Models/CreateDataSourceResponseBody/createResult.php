<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateDataSourceResponseBody;

use AlibabaCloud\Tea\Model;

class createResult extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $devDataSourceId;

    /**
     * @example 12345
     *
     * @var int
     */
    public $prodDataSourceId;
    protected $_name = [
        'devDataSourceId'  => 'DevDataSourceId',
        'prodDataSourceId' => 'ProdDataSourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return createResult
     */
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
