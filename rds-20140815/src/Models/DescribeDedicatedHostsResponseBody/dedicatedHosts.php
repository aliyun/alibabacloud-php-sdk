<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHosts;
use AlibabaCloud\Tea\Model;

class dedicatedHosts extends Model
{
    /**
     * @var dedicatedHosts[]
     */
    public $dedicatedHosts;
    protected $_name = [
        'dedicatedHosts' => 'DedicatedHosts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicatedHosts) {
            $res['DedicatedHosts'] = [];
            if (null !== $this->dedicatedHosts && \is_array($this->dedicatedHosts)) {
                $n = 0;
                foreach ($this->dedicatedHosts as $item) {
                    $res['DedicatedHosts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicatedHosts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicatedHosts'])) {
            if (!empty($map['DedicatedHosts'])) {
                $model->dedicatedHosts = [];
                $n                     = 0;
                foreach ($map['DedicatedHosts'] as $item) {
                    $model->dedicatedHosts[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
