<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class DescribeHistoryEventsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $eventLevelsShrink;

    /**
     * @var string
     */
    public $eventStatusShrink;

    /**
     * @var string
     */
    public $eventTypesShrink;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceIdsShrink;
    protected $_name = [
        'eventLevelsShrink' => 'EventLevels',
        'eventStatusShrink' => 'EventStatus',
        'eventTypesShrink' => 'EventTypes',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'resourceIdsShrink' => 'ResourceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventLevelsShrink) {
            $res['EventLevels'] = $this->eventLevelsShrink;
        }

        if (null !== $this->eventStatusShrink) {
            $res['EventStatus'] = $this->eventStatusShrink;
        }

        if (null !== $this->eventTypesShrink) {
            $res['EventTypes'] = $this->eventTypesShrink;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
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
        if (isset($map['EventLevels'])) {
            $model->eventLevelsShrink = $map['EventLevels'];
        }

        if (isset($map['EventStatus'])) {
            $model->eventStatusShrink = $map['EventStatus'];
        }

        if (isset($map['EventTypes'])) {
            $model->eventTypesShrink = $map['EventTypes'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }

        return $model;
    }
}
