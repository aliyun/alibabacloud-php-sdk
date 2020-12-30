<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterBasicInfoResponseBody\clusterInfo\softwareInfo\softwares;
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

    /**
     * @var softwares
     */
    public $softwares;
    protected $_name = [
        'emrVer'      => 'EmrVer',
        'clusterType' => 'ClusterType',
        'softwares'   => 'Softwares',
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
        if (null !== $this->softwares) {
            $res['Softwares'] = null !== $this->softwares ? $this->softwares->toMap() : null;
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
        if (isset($map['Softwares'])) {
            $model->softwares = softwares::fromMap($map['Softwares']);
        }

        return $model;
    }
}
