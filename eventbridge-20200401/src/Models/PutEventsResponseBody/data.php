<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutEventsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\PutEventsResponseBody\data\entryList;

class data extends Model
{
    /**
     * @var entryList[]
     */
    public $entryList;

    /**
     * @var int
     */
    public $failedEntryCount;
    protected $_name = [
        'entryList' => 'EntryList',
        'failedEntryCount' => 'FailedEntryCount',
    ];

    public function validate()
    {
        if (\is_array($this->entryList)) {
            Model::validateArray($this->entryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entryList) {
            if (\is_array($this->entryList)) {
                $res['EntryList'] = [];
                $n1 = 0;
                foreach ($this->entryList as $item1) {
                    $res['EntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->failedEntryCount) {
            $res['FailedEntryCount'] = $this->failedEntryCount;
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
        if (isset($map['EntryList'])) {
            if (!empty($map['EntryList'])) {
                $model->entryList = [];
                $n1 = 0;
                foreach ($map['EntryList'] as $item1) {
                    $model->entryList[$n1] = entryList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['FailedEntryCount'])) {
            $model->failedEntryCount = $map['FailedEntryCount'];
        }

        return $model;
    }
}
