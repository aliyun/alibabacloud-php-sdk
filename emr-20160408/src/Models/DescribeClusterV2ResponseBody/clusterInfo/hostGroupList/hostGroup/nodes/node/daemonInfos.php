<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\daemonInfos\daemonInfo;
use AlibabaCloud\Tea\Model;

class daemonInfos extends Model
{
    /**
     * @var daemonInfo[]
     */
    public $daemonInfo;
    protected $_name = [
        'daemonInfo' => 'DaemonInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->daemonInfo) {
            $res['DaemonInfo'] = [];
            if (null !== $this->daemonInfo && \is_array($this->daemonInfo)) {
                $n = 0;
                foreach ($this->daemonInfo as $item) {
                    $res['DaemonInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return daemonInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DaemonInfo'])) {
            if (!empty($map['DaemonInfo'])) {
                $model->daemonInfo = [];
                $n                 = 0;
                foreach ($map['DaemonInfo'] as $item) {
                    $model->daemonInfo[$n++] = null !== $item ? daemonInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
