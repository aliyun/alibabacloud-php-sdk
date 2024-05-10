<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class BindHybridProxyRequest extends Model
{
    /**
     * @description The name of the proxy cluster.
     *
     * This parameter is required.
     * @example sas-proxy
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The UUIDs of servers that you want to add to Security Center over the proxy server.
     *
     * This parameter is required.
     * @var string[]
     */
    public $yundunUuids;
    protected $_name = [
        'clusterName' => 'ClusterName',
        'yundunUuids' => 'YundunUuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->yundunUuids) {
            $res['YundunUuids'] = $this->yundunUuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindHybridProxyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['YundunUuids'])) {
            if (!empty($map['YundunUuids'])) {
                $model->yundunUuids = $map['YundunUuids'];
            }
        }

        return $model;
    }
}
