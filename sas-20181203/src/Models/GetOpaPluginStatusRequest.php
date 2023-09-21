<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetOpaPluginStatusRequest extends Model
{
    /**
     * @var string[]
     */
    public $clusterIds;
    protected $_name = [
        'clusterIds' => 'ClusterIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterIds) {
            $res['ClusterIds'] = $this->clusterIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOpaPluginStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterIds'])) {
            if (!empty($map['ClusterIds'])) {
                $model->clusterIds = $map['ClusterIds'];
            }
        }

        return $model;
    }
}
