<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeSnatEntriesResponseBody\snatEntries\snatEntry;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->snatEntry) {
            $res['SnatEntry'] = [];
            if (null !== $this->snatEntry && \is_array($this->snatEntry)) {
                $n = 0;
                foreach ($this->snatEntry as $item) {
                    $res['SnatEntry'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snatEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SnatEntry'])) {
            if (!empty($map['SnatEntry'])) {
                $model->snatEntry = [];
                $n                = 0;
                foreach ($map['SnatEntry'] as $item) {
                    $model->snatEntry[$n++] = null !== $item ? snatEntry::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
