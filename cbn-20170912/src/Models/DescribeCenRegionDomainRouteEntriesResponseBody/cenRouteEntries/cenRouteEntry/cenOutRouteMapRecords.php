<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenOutRouteMapRecords\cenOutRouteMapRecord;

class cenOutRouteMapRecords extends Model
{
    /**
     * @var cenOutRouteMapRecord[]
     */
    public $cenOutRouteMapRecord;
    protected $_name = [
        'cenOutRouteMapRecord' => 'CenOutRouteMapRecord',
    ];

    public function validate()
    {
        if (\is_array($this->cenOutRouteMapRecord)) {
            Model::validateArray($this->cenOutRouteMapRecord);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenOutRouteMapRecord) {
            if (\is_array($this->cenOutRouteMapRecord)) {
                $res['CenOutRouteMapRecord'] = [];
                $n1                          = 0;
                foreach ($this->cenOutRouteMapRecord as $item1) {
                    $res['CenOutRouteMapRecord'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CenOutRouteMapRecord'])) {
            if (!empty($map['CenOutRouteMapRecord'])) {
                $model->cenOutRouteMapRecord = [];
                $n1                          = 0;
                foreach ($map['CenOutRouteMapRecord'] as $item1) {
                    $model->cenOutRouteMapRecord[$n1++] = cenOutRouteMapRecord::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
