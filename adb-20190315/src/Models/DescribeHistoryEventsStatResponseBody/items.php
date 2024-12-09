<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeHistoryEventsStatResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example Exception
     *
     * @var string
     */
    public $eventCategory;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'eventCategory' => 'EventCategory',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventCategory) {
            $res['EventCategory'] = $this->eventCategory;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventCategory'])) {
            $model->eventCategory = $map['EventCategory'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
