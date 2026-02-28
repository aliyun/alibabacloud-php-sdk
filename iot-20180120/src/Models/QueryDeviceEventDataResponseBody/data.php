<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceEventDataResponseBody\data\list_;

class data extends Model
{
    /**
     * @var list_
     */
    public $list;

    /**
     * @var int
     */
    public $nextTime;

    /**
     * @var bool
     */
    public $nextValid;
    protected $_name = [
        'list' => 'List',
        'nextTime' => 'NextTime',
        'nextValid' => 'NextValid',
    ];

    public function validate()
    {
        if (null !== $this->list) {
            $this->list->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toArray($noStream) : $this->list;
        }

        if (null !== $this->nextTime) {
            $res['NextTime'] = $this->nextTime;
        }

        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
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
