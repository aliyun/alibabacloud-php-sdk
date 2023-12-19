<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Tea\Model;

class GetCertWarehouseQuotaResponseBody extends Model
{
    /**
     * @example CBF1E9B7-D6A0-4E9E-AD3E-2B47E6C2837D
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 5000
     *
     * @var int
     */
    public $totalQuota;

    /**
     * @example 1000
     *
     * @var int
     */
    public $useCount;
    protected $_name = [
        'requestId'  => 'RequestId',
        'totalQuota' => 'TotalQuota',
        'useCount'   => 'UseCount',
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
        if (null !== $this->totalQuota) {
            $res['TotalQuota'] = $this->totalQuota;
        }
        if (null !== $this->useCount) {
            $res['UseCount'] = $this->useCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCertWarehouseQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalQuota'])) {
            $model->totalQuota = $map['TotalQuota'];
        }
        if (isset($map['UseCount'])) {
            $model->useCount = $map['UseCount'];
        }

        return $model;
    }
}
