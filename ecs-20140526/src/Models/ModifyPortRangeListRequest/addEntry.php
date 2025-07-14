<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\ModifyPortRangeListRequest;

use AlibabaCloud\Tea\Model;

class addEntry extends Model
{
    /**
     * @description The description of the port range in entry N. The description must be 2 to 32 characters in length and cannot start with http:// or https://. Valid values of N: 0 to 200.
     *
     * @example This is description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The port range in entry N. Valid values of N: 0 to 200. Take note of the following limits:
     *
     *   The total number of entries in the port list cannot exceed the `MaxEntries` value.
     *   `PortRange` in different entries cannot be duplicated.
     *   The value of this parameter cannot be the same as the value of `RemoveEntry.N.PortRange`.
     *
     * @example 80/80
     *
     * @var string
     */
    public $portRange;
    protected $_name = [
        'description' => 'Description',
        'portRange' => 'PortRange',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->portRange) {
            $res['PortRange'] = $this->portRange;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['PortRange'])) {
            $model->portRange = $map['PortRange'];
        }

        return $model;
    }
}
