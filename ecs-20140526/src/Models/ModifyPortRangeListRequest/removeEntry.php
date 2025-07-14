<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest;

use AlibabaCloud\Tea\Model;

class removeEntry extends Model
{
    /**
     * @description The port range in entry N. Valid values of N: 0 to 200. Take note of the following limits:
     *
     *   `PortRange` in different entries cannot be duplicated.
     *   The value of this parameter cannot be the same as the value of `AddEntry.N.PortRange`.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;
    protected $_name = [
        'portRange' => 'PortRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return removeEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        return $model;
    }
}
