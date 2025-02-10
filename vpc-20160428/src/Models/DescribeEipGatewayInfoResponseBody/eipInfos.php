<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeEipGatewayInfoResponseBody\eipInfos\eipInfo;

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
        if (\is_array($this->eipInfo)) {
            Model::validateArray($this->eipInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipInfo) {
            if (\is_array($this->eipInfo)) {
                $res['EipInfo'] = [];
                $n1             = 0;
                foreach ($this->eipInfo as $item1) {
                    $res['EipInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EipInfo'])) {
            if (!empty($map['EipInfo'])) {
                $model->eipInfo = [];
                $n1             = 0;
                foreach ($map['EipInfo'] as $item1) {
                    $model->eipInfo[$n1++] = eipInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
