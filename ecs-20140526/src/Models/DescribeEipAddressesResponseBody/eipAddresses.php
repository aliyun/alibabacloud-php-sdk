<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeEipAddressesResponseBody\eipAddresses\eipAddress;

class eipAddresses extends Model
{
    /**
     * @var eipAddress[]
     */
    public $eipAddress;
    protected $_name = [
        'eipAddress' => 'EipAddress',
    ];

    public function validate()
    {
        if (\is_array($this->eipAddress)) {
            Model::validateArray($this->eipAddress);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eipAddress) {
            if (\is_array($this->eipAddress)) {
                $res['EipAddress'] = [];
                $n1                = 0;
                foreach ($this->eipAddress as $item1) {
                    $res['EipAddress'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['EipAddress'])) {
            if (!empty($map['EipAddress'])) {
                $model->eipAddress = [];
                $n1                = 0;
                foreach ($map['EipAddress'] as $item1) {
                    $model->eipAddress[$n1++] = eipAddress::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
