<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCapabilitiesResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCapabilitiesResponseBody\capabilities\capability;
use AlibabaCloud\Tea\Model;

class capabilities extends Model
{
    /**
     * @var capability[]
     */
    public $capability;
    protected $_name = [
        'capability' => 'Capability',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->capability) {
            $res['Capability'] = [];
            if (null !== $this->capability && \is_array($this->capability)) {
                $n = 0;
                foreach ($this->capability as $item) {
                    $res['Capability'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return capabilities
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Capability'])) {
            if (!empty($map['Capability'])) {
                $model->capability = [];
                $n                 = 0;
                foreach ($map['Capability'] as $item) {
                    $model->capability[$n++] = null !== $item ? capability::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
