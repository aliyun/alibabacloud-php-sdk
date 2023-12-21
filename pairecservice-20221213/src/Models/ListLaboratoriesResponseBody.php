<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListLaboratoriesResponseBody\laboratories;
use AlibabaCloud\Tea\Model;

class ListLaboratoriesResponseBody extends Model
{
    /**
     * @var laboratories[]
     */
    public $laboratories;

    /**
     * @description Id of the request
     *
     * @example 1C0898E5-9220-5443-B2D9-445FF0688215
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'laboratories' => 'Laboratories',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->laboratories) {
            $res['Laboratories'] = [];
            if (null !== $this->laboratories && \is_array($this->laboratories)) {
                $n = 0;
                foreach ($this->laboratories as $item) {
                    $res['Laboratories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLaboratoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Laboratories'])) {
            if (!empty($map['Laboratories'])) {
                $model->laboratories = [];
                $n                   = 0;
                foreach ($map['Laboratories'] as $item) {
                    $model->laboratories[$n++] = null !== $item ? laboratories::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
