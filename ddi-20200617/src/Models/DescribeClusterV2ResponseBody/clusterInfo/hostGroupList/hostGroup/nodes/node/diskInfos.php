<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node;

use AlibabaCloud\SDK\Ddi\V20200617\Models\DescribeClusterV2ResponseBody\clusterInfo\hostGroupList\hostGroup\nodes\node\diskInfos\diskInfo;
use AlibabaCloud\Tea\Model;

class diskInfos extends Model
{
    /**
     * @var diskInfo[]
     */
    public $diskInfo;
    protected $_name = [
        'diskInfo' => 'DiskInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskInfo) {
            $res['DiskInfo'] = [];
            if (null !== $this->diskInfo && \is_array($this->diskInfo)) {
                $n = 0;
                foreach ($this->diskInfo as $item) {
                    $res['DiskInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskInfo'])) {
            if (!empty($map['DiskInfo'])) {
                $model->diskInfo = [];
                $n               = 0;
                foreach ($map['DiskInfo'] as $item) {
                    $model->diskInfo[$n++] = null !== $item ? diskInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
