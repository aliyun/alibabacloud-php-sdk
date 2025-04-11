<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords\cenRouteMapRecord;

class cenRouteMapRecords extends Model
{
    /**
     * @var cenRouteMapRecord[]
     */
    public $cenRouteMapRecord;
    protected $_name = [
        'cenRouteMapRecord' => 'CenRouteMapRecord',
    ];

    public function validate()
    {
        if (\is_array($this->cenRouteMapRecord)) {
            Model::validateArray($this->cenRouteMapRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenRouteMapRecord) {
            if (\is_array($this->cenRouteMapRecord)) {
                $res['CenRouteMapRecord'] = [];
                $n1 = 0;
                foreach ($this->cenRouteMapRecord as $item1) {
                    $res['CenRouteMapRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CenRouteMapRecord'])) {
            if (!empty($map['CenRouteMapRecord'])) {
                $model->cenRouteMapRecord = [];
                $n1 = 0;
                foreach ($map['CenRouteMapRecord'] as $item1) {
                    $model->cenRouteMapRecord[$n1++] = cenRouteMapRecord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
