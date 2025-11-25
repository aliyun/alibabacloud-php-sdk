<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZoneInfoResponseBody\bindEdgeDnsClusters\edgeDnsCluster;

class bindEdgeDnsClusters extends Model
{
    /**
     * @var edgeDnsCluster[]
     */
    public $edgeDnsCluster;
    protected $_name = [
        'edgeDnsCluster' => 'EdgeDnsCluster',
    ];

    public function validate()
    {
        if (\is_array($this->edgeDnsCluster)) {
            Model::validateArray($this->edgeDnsCluster);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->edgeDnsCluster) {
            if (\is_array($this->edgeDnsCluster)) {
                $res['EdgeDnsCluster'] = [];
                $n1 = 0;
                foreach ($this->edgeDnsCluster as $item1) {
                    $res['EdgeDnsCluster'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EdgeDnsCluster'])) {
            if (!empty($map['EdgeDnsCluster'])) {
                $model->edgeDnsCluster = [];
                $n1 = 0;
                foreach ($map['EdgeDnsCluster'] as $item1) {
                    $model->edgeDnsCluster[$n1] = edgeDnsCluster::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
