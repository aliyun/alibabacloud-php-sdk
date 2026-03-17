<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeCloudConnectNetworksResponseBody\cloudConnectNetworks\cloudConnectNetwork;

class cloudConnectNetworks extends Model
{
    /**
     * @var cloudConnectNetwork[]
     */
    public $cloudConnectNetwork;
    protected $_name = [
        'cloudConnectNetwork' => 'CloudConnectNetwork',
    ];

    public function validate()
    {
        if (\is_array($this->cloudConnectNetwork)) {
            Model::validateArray($this->cloudConnectNetwork);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudConnectNetwork) {
            if (\is_array($this->cloudConnectNetwork)) {
                $res['CloudConnectNetwork'] = [];
                $n1 = 0;
                foreach ($this->cloudConnectNetwork as $item1) {
                    $res['CloudConnectNetwork'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CloudConnectNetwork'])) {
            if (!empty($map['CloudConnectNetwork'])) {
                $model->cloudConnectNetwork = [];
                $n1 = 0;
                foreach ($map['CloudConnectNetwork'] as $item1) {
                    $model->cloudConnectNetwork[$n1] = cloudConnectNetwork::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
