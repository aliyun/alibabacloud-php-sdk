<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeGlobalDataNetworkListResponseBody\items\networks;

class items extends Model
{
    /**
     * @var networks[]
     */
    public $networks;
    protected $_name = [
        'networks' => 'Networks',
    ];

    public function validate()
    {
        if (\is_array($this->networks)) {
            Model::validateArray($this->networks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networks) {
            if (\is_array($this->networks)) {
                $res['Networks'] = [];
                $n1 = 0;
                foreach ($this->networks as $item1) {
                    $res['Networks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Networks'])) {
            if (!empty($map['Networks'])) {
                $model->networks = [];
                $n1 = 0;
                foreach ($map['Networks'] as $item1) {
                    $model->networks[$n1++] = networks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
