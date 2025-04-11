<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

class cenRouteEntries extends Model
{
    /**
     * @var cenRouteEntry[]
     */
    public $cenRouteEntry;
    protected $_name = [
        'cenRouteEntry' => 'CenRouteEntry',
    ];

    public function validate()
    {
        if (\is_array($this->cenRouteEntry)) {
            Model::validateArray($this->cenRouteEntry);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenRouteEntry) {
            if (\is_array($this->cenRouteEntry)) {
                $res['CenRouteEntry'] = [];
                $n1 = 0;
                foreach ($this->cenRouteEntry as $item1) {
                    $res['CenRouteEntry'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CenRouteEntry'])) {
            if (!empty($map['CenRouteEntry'])) {
                $model->cenRouteEntry = [];
                $n1 = 0;
                foreach ($map['CenRouteEntry'] as $item1) {
                    $model->cenRouteEntry[$n1++] = cenRouteEntry::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
