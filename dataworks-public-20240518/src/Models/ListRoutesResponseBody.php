<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListRoutesResponseBody\routeList;
use AlibabaCloud\Tea\Model;

class ListRoutesResponseBody extends Model
{
    /**
     * @example 6A6CBE87-9F91-1323-B680-E7A7065XXXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The routes.
     *
     * @var routeList[]
     */
    public $routeList;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId' => 'RequestId',
        'routeList' => 'RouteList',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->routeList) {
            $res['RouteList'] = [];
            if (null !== $this->routeList && \is_array($this->routeList)) {
                $n = 0;
                foreach ($this->routeList as $item) {
                    $res['RouteList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRoutesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RouteList'])) {
            if (!empty($map['RouteList'])) {
                $model->routeList = [];
                $n                = 0;
                foreach ($map['RouteList'] as $item) {
                    $model->routeList[$n++] = null !== $item ? routeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
