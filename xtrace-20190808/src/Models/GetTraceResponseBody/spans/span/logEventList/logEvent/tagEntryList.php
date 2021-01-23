<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList\logEvent;

use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList\logEvent\tagEntryList\tagEntry;
use AlibabaCloud\Tea\Model;

class tagEntryList extends Model
{
    /**
     * @var tagEntry[]
     */
    public $tagEntry;
    protected $_name = [
        'tagEntry' => 'TagEntry',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagEntry) {
            $res['TagEntry'] = [];
            if (null !== $this->tagEntry && \is_array($this->tagEntry)) {
                $n = 0;
                foreach ($this->tagEntry as $item) {
                    $res['TagEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagEntryList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagEntry'])) {
            if (!empty($map['TagEntry'])) {
                $model->tagEntry = [];
                $n               = 0;
                foreach ($map['TagEntry'] as $item) {
                    $model->tagEntry[$n++] = null !== $item ? tagEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
