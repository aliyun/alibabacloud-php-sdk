<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTraceResponseBody\spans\logEventList\tagEntryList;
use AlibabaCloud\Tea\Model;

class logEventList extends Model
{
    /**
     * @description The tags of the trace.
     *
     * @var tagEntryList[]
     */
    public $tagEntryList;

    /**
     * @description The timestamp when the log event was generated.
     *
     * @example 1590388651
     *
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'tagEntryList' => 'TagEntryList',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagEntryList) {
            $res['TagEntryList'] = [];
            if (null !== $this->tagEntryList && \is_array($this->tagEntryList)) {
                $n = 0;
                foreach ($this->tagEntryList as $item) {
                    $res['TagEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logEventList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagEntryList'])) {
            if (!empty($map['TagEntryList'])) {
                $model->tagEntryList = [];
                $n                   = 0;
                foreach ($map['TagEntryList'] as $item) {
                    $model->tagEntryList[$n++] = null !== $item ? tagEntryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
