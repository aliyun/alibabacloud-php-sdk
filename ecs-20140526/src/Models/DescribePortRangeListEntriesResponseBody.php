<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePortRangeListEntriesResponseBody\entries;
use AlibabaCloud\Tea\Model;

class DescribePortRangeListEntriesResponseBody extends Model
{
    /**
     * @description Port list entries.
     *
     * @var entries[]
     */
    public $entries;

    /**
     * @description The request ID.
     *
     * @example 882304EC-5CE2-5860-98ED-3FA1D8D74A0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'entries' => 'Entries',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->entries) {
            $res['Entries'] = [];
            if (null !== $this->entries && \is_array($this->entries)) {
                $n = 0;
                foreach ($this->entries as $item) {
                    $res['Entries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePortRangeListEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n = 0;
                foreach ($map['Entries'] as $item) {
                    $model->entries[$n++] = null !== $item ? entries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
