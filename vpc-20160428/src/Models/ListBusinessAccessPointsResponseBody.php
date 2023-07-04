<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody\businessAccessPoints;
use AlibabaCloud\Tea\Model;

class ListBusinessAccessPointsResponseBody extends Model
{
    /**
     * @description The list of access points.
     *
     * @var businessAccessPoints[]
     */
    public $businessAccessPoints;

    /**
     * @description The ID of the request.
     *
     * @example 611CB80C-B6A9-43DB-9E38-0B0AC3D9B58F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'businessAccessPoints' => 'BusinessAccessPoints',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessAccessPoints) {
            $res['BusinessAccessPoints'] = [];
            if (null !== $this->businessAccessPoints && \is_array($this->businessAccessPoints)) {
                $n = 0;
                foreach ($this->businessAccessPoints as $item) {
                    $res['BusinessAccessPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBusinessAccessPointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessAccessPoints'])) {
            if (!empty($map['BusinessAccessPoints'])) {
                $model->businessAccessPoints = [];
                $n                           = 0;
                foreach ($map['BusinessAccessPoints'] as $item) {
                    $model->businessAccessPoints[$n++] = null !== $item ? businessAccessPoints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
