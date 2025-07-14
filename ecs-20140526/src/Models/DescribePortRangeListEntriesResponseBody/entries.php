<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListEntriesResponseBody;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @description The description of the port range.
     *
     * @example Description information of PortRangeList
     *
     * @var string
     */
    public $description;

    /**
     * @description The port range.
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
     * @return entries
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
