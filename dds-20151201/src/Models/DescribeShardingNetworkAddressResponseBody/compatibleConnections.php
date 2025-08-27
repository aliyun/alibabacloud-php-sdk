<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeShardingNetworkAddressResponseBody\compatibleConnections\compatibleConnection;

class compatibleConnections extends Model
{
    /**
     * @var compatibleConnection[]
     */
    public $compatibleConnection;
    protected $_name = [
        'compatibleConnection' => 'CompatibleConnection',
    ];

    public function validate()
    {
        if (\is_array($this->compatibleConnection)) {
            Model::validateArray($this->compatibleConnection);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->compatibleConnection) {
            if (\is_array($this->compatibleConnection)) {
                $res['CompatibleConnection'] = [];
                $n1 = 0;
                foreach ($this->compatibleConnection as $item1) {
                    $res['CompatibleConnection'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CompatibleConnection'])) {
            if (!empty($map['CompatibleConnection'])) {
                $model->compatibleConnection = [];
                $n1 = 0;
                foreach ($map['CompatibleConnection'] as $item1) {
                    $model->compatibleConnection[$n1] = compatibleConnection::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
