<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponseBody\multiCallChainInfos\spans;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetMultipleTraceResponseBody\multiCallChainInfos\spans\logEventList\tagEntryList;

class logEventList extends Model
{
    /**
     * @var tagEntryList[]
     */
    public $tagEntryList;
    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'tagEntryList' => 'TagEntryList',
        'timestamp'    => 'Timestamp',
    ];

    public function validate()
    {
        if (\is_array($this->tagEntryList)) {
            Model::validateArray($this->tagEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tagEntryList) {
            if (\is_array($this->tagEntryList)) {
                $res['TagEntryList'] = [];
                $n1                  = 0;
                foreach ($this->tagEntryList as $item1) {
                    $res['TagEntryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['TagEntryList'])) {
                $model->tagEntryList = [];
                $n1                  = 0;
                foreach ($map['TagEntryList'] as $item1) {
                    $model->tagEntryList[$n1++] = tagEntryList::fromMap($item1);
                }
            }
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        return $model;
    }
}
