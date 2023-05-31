<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribePropertyCronItemResponseBody;

use AlibabaCloud\Tea\Model;

class propertyItems extends Model
{
    /**
     * @description The number of servers on which the scheduled task is run.
     *
     * @example 23
     *
     * @var int
     */
    public $count;

    /**
     * @description The path to the scheduled task.
     *
     * @example /data
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'count'  => 'Count',
        'source' => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return propertyItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
