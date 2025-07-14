<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\CreatePortRangeListRequest;

use AlibabaCloud\Tea\Model;

class entry extends Model
{
    /**
     * @description The description of port range N. The description must be 2 to 32 characters in length and cannot start with http:// or https://. Valid values of N: 0 to 200.
     *
     * @example Description information of Entry
     *
     * @var string
     */
    public $description;

    /**
     * @description Port range N. Valid values of N: 0 to 200.
     *
     *   The total number of entries cannot exceed the `MaxEntries` value.
     *   `PortRange` in multiple entries cannot be duplicated.
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
     * @return entry
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
