<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeDnatEntriesResponseBody\dnatEntries\dnatEntry;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dnatEntry) {
            $res['DnatEntry'] = [];
            if (null !== $this->dnatEntry && \is_array($this->dnatEntry)) {
                $n = 0;
                foreach ($this->dnatEntry as $item) {
                    $res['DnatEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dnatEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DnatEntry'])) {
            if (!empty($map['DnatEntry'])) {
                $model->dnatEntry = [];
                $n                = 0;
                foreach ($map['DnatEntry'] as $item) {
                    $model->dnatEntry[$n++] = null !== $item ? dnatEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
