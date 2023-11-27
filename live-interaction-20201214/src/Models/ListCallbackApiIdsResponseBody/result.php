<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\ListCallbackApiIdsResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var bool[]
     */
    public $events;

    /**
     * @var bool[]
     */
    public $spis;
    protected $_name = [
        'events' => 'Events',
        'spis'   => 'Spis',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }
        if (null !== $this->spis) {
            $res['Spis'] = $this->spis;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Events'])) {
            $model->events = $map['Events'];
        }
        if (isset($map['Spis'])) {
            $model->spis = $map['Spis'];
        }

        return $model;
    }
}
