<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo;

use AlibabaCloud\Tea\Model;

class onPremiseInfo extends Model
{
    /**
     * @var \AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo\onPremiseInfo[]
     */
    public $onPremiseInfo;
    protected $_name = [
        'onPremiseInfo' => 'OnPremiseInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onPremiseInfo) {
            $res['OnPremiseInfo'] = [];
            if (null !== $this->onPremiseInfo && \is_array($this->onPremiseInfo)) {
                $n = 0;
                foreach ($this->onPremiseInfo as $item) {
                    $res['OnPremiseInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return onPremiseInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OnPremiseInfo'])) {
            if (!empty($map['OnPremiseInfo'])) {
                $model->onPremiseInfo = [];
                $n                    = 0;
                foreach ($map['OnPremiseInfo'] as $item) {
                    $model->onPremiseInfo[$n++] = null !== $item ? \AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeClusterResponseBody\clusterInfo\onPremiseInfo\onPremiseInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
