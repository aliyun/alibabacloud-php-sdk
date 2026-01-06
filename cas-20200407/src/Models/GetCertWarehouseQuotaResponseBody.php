<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class GetCertWarehouseQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $appTotalQuota;

    /**
     * @var int
     */
    public $appUseCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalQuota;

    /**
     * @var int
     */
    public $useCount;
    protected $_name = [
        'appTotalQuota' => 'AppTotalQuota',
        'appUseCount' => 'AppUseCount',
        'requestId' => 'RequestId',
        'totalQuota' => 'TotalQuota',
        'useCount' => 'UseCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appTotalQuota) {
            $res['AppTotalQuota'] = $this->appTotalQuota;
        }

        if (null !== $this->appUseCount) {
            $res['AppUseCount'] = $this->appUseCount;
        }

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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppTotalQuota'])) {
            $model->appTotalQuota = $map['AppTotalQuota'];
        }

        if (isset($map['AppUseCount'])) {
            $model->appUseCount = $map['AppUseCount'];
        }

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
