<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeBgpNetworksResponseBody\bgpNetworks\bgpNetwork;

class bgpNetworks extends Model
{
    /**
     * @var bgpNetwork[]
     */
    public $bgpNetwork;
    protected $_name = [
        'bgpNetwork' => 'BgpNetwork',
    ];

    public function validate()
    {
        if (\is_array($this->bgpNetwork)) {
            Model::validateArray($this->bgpNetwork);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgpNetwork) {
            if (\is_array($this->bgpNetwork)) {
                $res['BgpNetwork'] = [];
                $n1                = 0;
                foreach ($this->bgpNetwork as $item1) {
                    $res['BgpNetwork'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BgpNetwork'])) {
            if (!empty($map['BgpNetwork'])) {
                $model->bgpNetwork = [];
                $n1                = 0;
                foreach ($map['BgpNetwork'] as $item1) {
                    $model->bgpNetwork[$n1++] = bgpNetwork::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
