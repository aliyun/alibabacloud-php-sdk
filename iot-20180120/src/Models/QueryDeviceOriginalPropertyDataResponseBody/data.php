<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceOriginalPropertyDataResponseBody\data\list_;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The properties. Each element indicates a property.
     *
     * @var list_
     */
    public $list;

    /**
     * @description Indicates whether the next page exists.
     *
     * - **true**: The next page exists.
     * - **false**: The next page does not exist.
     *
     * If **true** is returned for the **NextValid** parameter, you can add the value of the **NextPageToken** parameter to the next request. This way, you can query the data that is not included in the current query.
     * @example true
     *
     * @var bool
     */
    public $nextValid;

    /**
     * @description The token that is used to retrieve the next page of the query results.
     *
     * @example Bo***x44Qx
     *
     * @var string
     */
    public $nextPageToken;
    protected $_name = [
        'list'          => 'List',
        'nextValid'     => 'NextValid',
        'nextPageToken' => 'nextPageToken',
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
        if (null !== $this->nextValid) {
            $res['NextValid'] = $this->nextValid;
        }
        if (null !== $this->nextPageToken) {
            $res['nextPageToken'] = $this->nextPageToken;
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
        if (isset($map['NextValid'])) {
            $model->nextValid = $map['NextValid'];
        }
        if (isset($map['nextPageToken'])) {
            $model->nextPageToken = $map['nextPageToken'];
        }

        return $model;
    }
}
