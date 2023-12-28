<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\SDK\Oosops\V20190601\Models\ListDefaultQuotaResponseBody\quotas;
use AlibabaCloud\Tea\Model;

class ListDefaultQuotaResponseBody extends Model
{
    /**
     * @var quotas[]
     */
    public $quotas;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quotas'    => 'Quotas',
        'requestId' => 'RequestId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDefaultQuotaResponseBody
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

        return $model;
    }
}
