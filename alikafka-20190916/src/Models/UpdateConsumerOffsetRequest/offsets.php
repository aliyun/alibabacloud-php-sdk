<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\UpdateConsumerOffsetRequest;

use AlibabaCloud\Tea\Model;

class offsets extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $offset;

    /**
     * @example 0
     *
     * @var int
     */
    public $partition;
    protected $_name = [
        'offset'    => 'Offset',
        'partition' => 'Partition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }
        if (null !== $this->partition) {
            $res['Partition'] = $this->partition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return offsets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }
        if (isset($map['Partition'])) {
            $model->partition = $map['Partition'];
        }

        return $model;
    }
}
