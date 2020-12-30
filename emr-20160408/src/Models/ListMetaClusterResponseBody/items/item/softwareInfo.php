<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListMetaClusterResponseBody\items\item;

use AlibabaCloud\Tea\Model;

class softwareInfo extends Model
{
    /**
     * @var string
     */
    public $emrVer;

    /**
     * @var string
     */
    public $clusterType;
    protected $_name = [
        'emrVer'      => 'EmrVer',
        'clusterType' => 'ClusterType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->emrVer) {
            $res['EmrVer'] = $this->emrVer;
        }
        if (null !== $this->clusterType) {
            $res['ClusterType'] = $this->clusterType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwareInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EmrVer'])) {
            $model->emrVer = $map['EmrVer'];
        }
        if (isset($map['ClusterType'])) {
            $model->clusterType = $map['ClusterType'];
        }

        return $model;
    }
}
