<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos\eipInfo;
use AlibabaCloud\Tea\Model;

class eipInfos extends Model
{
    /**
     * @var eipInfo[]
     */
    public $eipInfo;
    protected $_name = [
        'eipInfo' => 'EipInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eipInfo) {
            $res['EipInfo'] = [];
            if (null !== $this->eipInfo && \is_array($this->eipInfo)) {
                $n = 0;
                foreach ($this->eipInfo as $item) {
                    $res['EipInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eipInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EipInfo'])) {
            if (!empty($map['EipInfo'])) {
                $model->eipInfo = [];
                $n              = 0;
                foreach ($map['EipInfo'] as $item) {
                    $model->eipInfo[$n++] = null !== $item ? eipInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
