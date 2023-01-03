<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var list_
     */
    public $list;

    /**
     * @example 1579249499000
     *
     * @var int
     */
    public $nextTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $nextValid;
    protected $_name = [
        'list'      => 'List',
        'nextTime'  => 'NextTime',
        'nextValid' => 'NextValid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
        }
        if (null !== $this->nextTime) {
            $res['NextTime'] = $this->nextTime;
        }
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
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
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }
        if (isset($map['NextTime'])) {
            $model->nextTime = $map['NextTime'];
        }
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }

        return $model;
    }
}
