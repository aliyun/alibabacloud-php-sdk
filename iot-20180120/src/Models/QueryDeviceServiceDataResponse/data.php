<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponse;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponse\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $nextTime;

    /**
     * @var bool
     */
    public $nextValid;

    /**
     * @var list_
     */
    public $list;
    protected $_name = [
        'nextTime'  => 'NextTime',
        'nextValid' => 'NextValid',
        'list'      => 'List',
    ];

    public function validate()
    {
        Model::validateRequired('nextTime', $this->nextTime, true);
        Model::validateRequired('nextValid', $this->nextValid, true);
        Model::validateRequired('list', $this->list, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextTime) {
            $res['NextTime'] = $this->nextTime;
        }
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }
        if (null !== $this->list) {
            $res['List'] = null !== $this->list ? $this->list->toMap() : null;
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
        if (isset($map['NextTime'])) {
            $model->nextTime = $map['NextTime'];
        }
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }
        if (isset($map['List'])) {
            $model->list = list_::fromMap($map['List']);
        }

        return $model;
    }
}
