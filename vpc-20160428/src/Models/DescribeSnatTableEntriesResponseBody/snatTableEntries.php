<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSnatTableEntriesResponseBody\snatTableEntries\snatTableEntry;

class snatTableEntries extends Model
{
    /**
     * @var snatTableEntry[]
     */
    public $snatTableEntry;
    protected $_name = [
        'snatTableEntry' => 'SnatTableEntry',
    ];

    public function validate()
    {
        if (\is_array($this->snatTableEntry)) {
            Model::validateArray($this->snatTableEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snatTableEntry) {
            if (\is_array($this->snatTableEntry)) {
                $res['SnatTableEntry'] = [];
                $n1 = 0;
                foreach ($this->snatTableEntry as $item1) {
                    $res['SnatTableEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnatTableEntry'])) {
            if (!empty($map['SnatTableEntry'])) {
                $model->snatTableEntry = [];
                $n1 = 0;
                foreach ($map['SnatTableEntry'] as $item1) {
                    $model->snatTableEntry[$n1] = snatTableEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
