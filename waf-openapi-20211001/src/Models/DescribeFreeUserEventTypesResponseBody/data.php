<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventTypesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The number of security events.
     *
     * @example 4
     *
     * @var string
     */
    public $eventNum;

    /**
     * @description The type of the security event.
     *
     * @example SMSInterfaceAbuse
     *
     * @var string
     */
    public $eventType;
    protected $_name = [
        'eventNum'  => 'EventNum',
        'eventType' => 'EventType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventNum) {
            $res['EventNum'] = $this->eventNum;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventNum'])) {
            $model->eventNum = $map['EventNum'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }

        return $model;
    }
}
