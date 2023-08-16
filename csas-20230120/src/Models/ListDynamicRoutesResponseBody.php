<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListDynamicRoutesResponseBody\dynamicRoutes;
use AlibabaCloud\Tea\Model;

class ListDynamicRoutesResponseBody extends Model
{
    /**
     * @var dynamicRoutes[]
     */
    public $dynamicRoutes;

    /**
     * @example 58D6B23E-E5DA-5418-8F61-51A3B5A30049
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalNum;
    protected $_name = [
        'dynamicRoutes' => 'DynamicRoutes',
        'requestId'     => 'RequestId',
        'totalNum'      => 'TotalNum',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dynamicRoutes) {
            $res['DynamicRoutes'] = [];
            if (null !== $this->dynamicRoutes && \is_array($this->dynamicRoutes)) {
                $n = 0;
                foreach ($this->dynamicRoutes as $item) {
                    $res['DynamicRoutes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalNum) {
            $res['TotalNum'] = $this->totalNum;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDynamicRoutesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DynamicRoutes'])) {
            if (!empty($map['DynamicRoutes'])) {
                $model->dynamicRoutes = [];
                $n                    = 0;
                foreach ($map['DynamicRoutes'] as $item) {
                    $model->dynamicRoutes[$n++] = null !== $item ? dynamicRoutes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalNum'])) {
            $model->totalNum = $map['TotalNum'];
        }

        return $model;
    }
}
