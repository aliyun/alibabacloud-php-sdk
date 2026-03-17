<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponseBody\dnatEntries\dnatEntry;

class dnatEntries extends Model
{
    /**
     * @var dnatEntry[]
     */
    public $dnatEntry;
    protected $_name = [
        'dnatEntry' => 'DnatEntry',
    ];

    public function validate()
    {
        if (\is_array($this->dnatEntry)) {
            Model::validateArray($this->dnatEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dnatEntry) {
            if (\is_array($this->dnatEntry)) {
                $res['DnatEntry'] = [];
                $n1 = 0;
                foreach ($this->dnatEntry as $item1) {
                    $res['DnatEntry'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DnatEntry'])) {
            if (!empty($map['DnatEntry'])) {
                $model->dnatEntry = [];
                $n1 = 0;
                foreach ($map['DnatEntry'] as $item1) {
                    $model->dnatEntry[$n1] = dnatEntry::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
