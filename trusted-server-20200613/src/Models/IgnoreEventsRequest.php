<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trustedserver\V20200613\Models;

use AlibabaCloud\Tea\Model;

class IgnoreEventsRequest extends Model
{
    /**
     * @example ["14e055e60c8c19264a4c0045feee****"]
     *
     * @var string
     */
    public $eventUuids;

    /**
     * @example 1
     *
     * @var int
     */
    public $handleStyle;
    protected $_name = [
        'eventUuids'  => 'EventUuids',
        'handleStyle' => 'HandleStyle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventUuids) {
            $res['EventUuids'] = $this->eventUuids;
        }
        if (null !== $this->handleStyle) {
            $res['HandleStyle'] = $this->handleStyle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreEventsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventUuids'])) {
            $model->eventUuids = $map['EventUuids'];
        }
        if (isset($map['HandleStyle'])) {
            $model->handleStyle = $map['HandleStyle'];
        }

        return $model;
    }
}
