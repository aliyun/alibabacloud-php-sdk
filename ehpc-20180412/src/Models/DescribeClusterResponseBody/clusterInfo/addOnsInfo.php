<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Tea\Model;

class addOnsInfo extends Model
{
    /**
     * @var \AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo\addOnsInfo[]
     */
    public $addOnsInfo;
    protected $_name = [
        'addOnsInfo' => 'AddOnsInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addOnsInfo) {
            $res['AddOnsInfo'] = [];
            if (null !== $this->addOnsInfo && \is_array($this->addOnsInfo)) {
                $n = 0;
                foreach ($this->addOnsInfo as $item) {
                    $res['AddOnsInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addOnsInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddOnsInfo'])) {
            if (!empty($map['AddOnsInfo'])) {
                $model->addOnsInfo = [];
                $n                 = 0;
                foreach ($map['AddOnsInfo'] as $item) {
                    $model->addOnsInfo[$n++] = null !== $item ? \AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\addOnsInfo\addOnsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
