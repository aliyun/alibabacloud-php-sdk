<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody\bindEdgeDnsClusters\edgeDnsCluster;
use AlibabaCloud\Tea\Model;

class bindEdgeDnsClusters extends Model
{
    /**
     * @var edgeDnsCluster[]
     */
    public $edgeDnsCluster;
    protected $_name = [
        'edgeDnsCluster' => 'EdgeDnsCluster',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->edgeDnsCluster) {
            $res['EdgeDnsCluster'] = [];
            if (null !== $this->edgeDnsCluster && \is_array($this->edgeDnsCluster)) {
                $n = 0;
                foreach ($this->edgeDnsCluster as $item) {
                    $res['EdgeDnsCluster'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bindEdgeDnsClusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeDnsCluster'])) {
            if (!empty($map['EdgeDnsCluster'])) {
                $model->edgeDnsCluster = [];
                $n = 0;
                foreach ($map['EdgeDnsCluster'] as $item) {
                    $model->edgeDnsCluster[$n++] = null !== $item ? edgeDnsCluster::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
