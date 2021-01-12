<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeSignedEventActionsResponseBody\eventItems;

use AlibabaCloud\Tea\Model;

class eventItems extends Model
{
    /**
     * @var int
     */
    public $eventId;

    /**
     * @var string
     */
    public $eventContent;

    /**
     * @var string
     */
    public $eventSig;

    /**
     * @var string
     */
    public $eventRcpt;
    protected $_name = [
        'eventId'      => 'EventId',
        'eventContent' => 'EventContent',
        'eventSig'     => 'EventSig',
        'eventRcpt'    => 'EventRcpt',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventContent) {
            $res['EventContent'] = $this->eventContent;
        }
        if (null !== $this->eventSig) {
            $res['EventSig'] = $this->eventSig;
        }
        if (null !== $this->eventRcpt) {
            $res['EventRcpt'] = $this->eventRcpt;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventContent'])) {
            $model->eventContent = $map['EventContent'];
        }
        if (isset($map['EventSig'])) {
            $model->eventSig = $map['EventSig'];
        }
        if (isset($map['EventRcpt'])) {
            $model->eventRcpt = $map['EventRcpt'];
        }

        return $model;
    }
}
