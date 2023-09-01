<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\SDK\AIWorkSpace\V20210204\Models\ListQuotasResponseBody\quotas;
use AlibabaCloud\Tea\Model;

class ListQuotasResponseBody extends Model
{
    /**
     * @var quotas[]
     */
    public $quotas;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'quotas'     => 'Quotas',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quotas) {
            $res['Quotas'] = [];
            if (null !== $this->quotas && \is_array($this->quotas)) {
                $n = 0;
                foreach ($this->quotas as $item) {
                    $res['Quotas'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListQuotasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quotas'])) {
            if (!empty($map['Quotas'])) {
                $model->quotas = [];
                $n             = 0;
                foreach ($map['Quotas'] as $item) {
                    $model->quotas[$n++] = null !== $item ? quotas::fromMap($item) : $item;
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
