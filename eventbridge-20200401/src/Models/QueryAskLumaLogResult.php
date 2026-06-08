<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class QueryAskLumaLogResult extends Model
{
    /**
     * @var AskLumaLogEntry[]
     */
    public $entries;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var string
     */
    public $lastKey;
    protected $_name = [
        'entries' => 'Entries',
        'hasMore' => 'HasMore',
        'lastKey' => 'LastKey',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['Entries'] = [];
                $n1 = 0;
                foreach ($this->entries as $item1) {
                    $res['Entries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['HasMore'] = $this->hasMore;
        }

        if (null !== $this->lastKey) {
            $res['LastKey'] = $this->lastKey;
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
        if (isset($map['Entries'])) {
            if (!empty($map['Entries'])) {
                $model->entries = [];
                $n1 = 0;
                foreach ($map['Entries'] as $item1) {
                    $model->entries[$n1] = AskLumaLogEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HasMore'])) {
            $model->hasMore = $map['HasMore'];
        }

        if (isset($map['LastKey'])) {
            $model->lastKey = $map['LastKey'];
        }

        return $model;
    }
}
