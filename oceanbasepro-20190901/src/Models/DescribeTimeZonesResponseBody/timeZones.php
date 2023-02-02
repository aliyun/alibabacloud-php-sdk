<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponseBody;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeTimeZonesResponseBody\timeZones\list_;
use AlibabaCloud\Tea\Model;

class timeZones extends Model
{
    /**
     * @description The default time zone.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $default;

    /**
     * @description The list of time zones.
     *
     * @var list_[]
     */
    public $list;
    protected $_name = [
        'default' => 'Default',
        'list'    => 'List',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->default) {
            $res['Default'] = $this->default;
        }
        if (null !== $this->list) {
            $res['List'] = [];
            if (null !== $this->list && \is_array($this->list)) {
                $n = 0;
                foreach ($this->list as $item) {
                    $res['List'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Default'])) {
            $model->default = $map['Default'];
        }
        if (isset($map['List'])) {
            if (!empty($map['List'])) {
                $model->list = [];
                $n           = 0;
                foreach ($map['List'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
