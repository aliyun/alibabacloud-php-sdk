<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdp\V20210402\Models;

use AlibabaCloud\Tea\Model;

class QueryRenewPriceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $instances;
    protected $_name = [
        'clusterBizId' => 'ClusterBizId',
        'instances'    => 'Instances',
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
        if (null !== $this->instances) {
            $res['Instances'] = $this->instances;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryRenewPriceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['Instances'])) {
            $model->instances = $map['Instances'];
        }

        return $model;
    }
}
