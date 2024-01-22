<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHistoryEventsStatResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The system event category. For more information, see [View the event history of an ApsaraDB RDS instance](~~129759~~).
     *
     * @example Exception
     *
     * @var string
     */
    public $eventCategory;

    /**
     * @description The total number of entries returned.
     *
     * @example 31
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
