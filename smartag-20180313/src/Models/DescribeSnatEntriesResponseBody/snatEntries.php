<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesResponseBody\snatEntries\snatEntry;

class snatEntries extends Model
{
    /**
     * @var snatEntry[]
     */
    public $snatEntry;
    protected $_name = [
        'snatEntry' => 'SnatEntry',
    ];

    public function validate()
    {
        if (\is_array($this->snatEntry)) {
            Model::validateArray($this->snatEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snatEntry) {
            if (\is_array($this->snatEntry)) {
                $res['SnatEntry'] = [];
                $n1 = 0;
                foreach ($this->snatEntry as $item1) {
                    $res['SnatEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnatEntry'])) {
            if (!empty($map['SnatEntry'])) {
                $model->snatEntry = [];
                $n1 = 0;
                foreach ($map['SnatEntry'] as $item1) {
                    $model->snatEntry[$n1] = snatEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
