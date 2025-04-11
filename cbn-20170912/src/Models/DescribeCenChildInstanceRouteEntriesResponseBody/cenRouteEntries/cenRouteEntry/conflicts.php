<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenChildInstanceRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\conflicts\conflict;

class conflicts extends Model
{
    /**
     * @var conflict[]
     */
    public $conflict;
    protected $_name = [
        'conflict' => 'Conflict',
    ];

    public function validate()
    {
        if (\is_array($this->conflict)) {
            Model::validateArray($this->conflict);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conflict) {
            if (\is_array($this->conflict)) {
                $res['Conflict'] = [];
                $n1 = 0;
                foreach ($this->conflict as $item1) {
                    $res['Conflict'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Conflict'])) {
            if (!empty($map['Conflict'])) {
                $model->conflict = [];
                $n1 = 0;
                foreach ($map['Conflict'] as $item1) {
                    $model->conflict[$n1++] = conflict::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
