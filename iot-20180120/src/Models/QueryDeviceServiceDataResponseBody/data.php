<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceServiceDataResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The array of service call records. Each element represents a service call record.
     *
     * @var list_
     */
    public $list;

    /**
     * @description The start time of service call records on the next page.
     *
     * If you call the QueryDeviceServiceData operation to query the service call records on the next page, you must set the **StartTime** parameter to the value of this parameter.
     * @example 1579335899000
     *
     * @var int
     */
    public $nextTime;

    /**
     * @description Indicates whether the next page exists.
     *
     *   **true**
     *   **false**
     *
     * If the return value of the **NextValid** parameter is **true**, you can use the value of the **NextTime** parameter as the value of the **StartTime** parameter when you query the next page of results.
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
