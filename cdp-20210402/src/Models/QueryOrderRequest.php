<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models;

use AlibabaCloud\Tea\Model;

class QueryOrderRequest extends Model
{
    /**
     * @var string
     */
    public $clusterBizId;
    protected $_name = [
        'clusterBizId' => 'ClusterBizId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }

        return $model;
    }
}
