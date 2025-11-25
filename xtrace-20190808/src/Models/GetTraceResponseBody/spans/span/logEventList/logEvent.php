<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTraceResponseBody\spans\span\logEventList\logEvent\tagEntryList;

class logEvent extends Model
{
    /**
     * @var tagEntryList
     */
    public $tagEntryList;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'tagEntryList' => 'TagEntryList',
        'timestamp' => 'Timestamp',
    ];

    public function validate()
    {
        if (null !== $this->tagEntryList) {
            $this->tagEntryList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagEntryList) {
            $res['TagEntryList'] = null !== $this->tagEntryList ? $this->tagEntryList->toArray($noStream) : $this->tagEntryList;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagEntryList'])) {
            $model->tagEntryList = tagEntryList::fromMap($map['TagEntryList']);
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
