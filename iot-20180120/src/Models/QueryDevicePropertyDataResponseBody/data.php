<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDevicePropertyDataResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The list of property records.
     *
     * @var list_
     */
    public $list;

    /**
     * @description The start time of the property records on the next page.
     *
     * - If the **Asc** parameter is set to **0**, you can specify this value for the **EndTime** parameter when you call this operation again to query the next page of property records.
     * - If the **Asc** parameter is set to **1**, you can specify this value for the **StartTime** parameter when you call this operation again to query the next page of property records.
     * @example 1579249499000
     *
     * @var int
     */
    public $nextTime;

    /**
     * @description Indicates whether the next page exists.
     *
     *   **true**: The next page exists. If the return value of the NextValid parameter is true, the value of the **NextTime** parameter is returned. For more information, see the description of the **NextTime** parameter in this topic.
     *   **false**: The next page does not exist.
     *
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
