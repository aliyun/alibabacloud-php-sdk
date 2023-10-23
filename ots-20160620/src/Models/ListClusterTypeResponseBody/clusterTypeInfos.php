<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponseBody;

use AlibabaCloud\Tea\Model;

class clusterTypeInfos extends Model
{
    /**
     * @var string[]
     */
    public $clusterType;
    protected $_name = [
        'clusterType' => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            if (!empty($map['ClusterType'])) {
                $model->clusterType = $map['ClusterType'];
            }
        }

        return $model;
    }
}
