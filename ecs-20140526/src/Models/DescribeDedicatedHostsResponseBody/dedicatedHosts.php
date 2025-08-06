<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHost;

class dedicatedHosts extends Model
{
    /**
     * @var dedicatedHost[]
     */
    public $dedicatedHost;
    protected $_name = [
        'dedicatedHost' => 'DedicatedHost',
    ];

    public function validate()
    {
        if (\is_array($this->dedicatedHost)) {
            Model::validateArray($this->dedicatedHost);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHost) {
            if (\is_array($this->dedicatedHost)) {
                $res['DedicatedHost'] = [];
                $n1 = 0;
                foreach ($this->dedicatedHost as $item1) {
                    $res['DedicatedHost'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedHost'])) {
            if (!empty($map['DedicatedHost'])) {
                $model->dedicatedHost = [];
                $n1 = 0;
                foreach ($map['DedicatedHost'] as $item1) {
                    $model->dedicatedHost[$n1] = dedicatedHost::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
