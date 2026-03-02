<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class TraceSpansLogEventList extends Model
{
    /**
     * @var TagEntry[]
     */
    public $logEventTagEntryList;
    protected $_name = [
        'logEventTagEntryList' => 'logEventTagEntryList',
    ];

    public function validate()
    {
        if (\is_array($this->logEventTagEntryList)) {
            Model::validateArray($this->logEventTagEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logEventTagEntryList) {
            if (\is_array($this->logEventTagEntryList)) {
                $res['logEventTagEntryList'] = [];
                $n1 = 0;
                foreach ($this->logEventTagEntryList as $item1) {
                    $res['logEventTagEntryList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['logEventTagEntryList'])) {
            if (!empty($map['logEventTagEntryList'])) {
                $model->logEventTagEntryList = [];
                $n1 = 0;
                foreach ($map['logEventTagEntryList'] as $item1) {
                    $model->logEventTagEntryList[$n1] = TagEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
