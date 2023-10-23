<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ots\V20160620\Models\ListClusterTypeResponseBody\clusterTypeDetailList;

use AlibabaCloud\Tea\Model;

class clusterTypeDetail extends Model
{
    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var bool
     */
    public $isMultiAZ;
    protected $_name = [
        'clusterType' => 'ClusterType',
        'isMultiAZ'   => 'IsMultiAZ',
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
        if (null !== $this->isMultiAZ) {
            $res['IsMultiAZ'] = $this->isMultiAZ;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusterTypeDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }
        if (isset($map['IsMultiAZ'])) {
            $model->isMultiAZ = $map['IsMultiAZ'];
        }

        return $model;
    }
}
