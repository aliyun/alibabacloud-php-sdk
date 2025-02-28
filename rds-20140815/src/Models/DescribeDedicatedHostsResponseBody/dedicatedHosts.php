<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDedicatedHostsResponseBody\dedicatedHosts\dedicatedHosts;

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
        if (\is_array($this->dedicatedHosts)) {
            Model::validateArray($this->dedicatedHosts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHosts) {
            if (\is_array($this->dedicatedHosts)) {
                $res['DedicatedHosts'] = [];
                $n1                    = 0;
                foreach ($this->dedicatedHosts as $item1) {
                    $res['DedicatedHosts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicatedHosts'])) {
            if (!empty($map['DedicatedHosts'])) {
                $model->dedicatedHosts = [];
                $n1                    = 0;
                foreach ($map['DedicatedHosts'] as $item1) {
                    $model->dedicatedHosts[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
