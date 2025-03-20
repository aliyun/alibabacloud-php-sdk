<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetUserLogDeliveryQuotaResponseBody extends Model
{
    /**
     * @description The log category. Valid values:
     *
     *   dcdn_log_access_l1 (default): access logs.
     *   dcdn_log_er: Edge Routine logs.
     *   dcdn_log_waf: firewall logs.
     *   dcdn_log_ipa: TCP/UDP proxy logs.
     *
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The remaining quota.
     *
     * @example 3
     *
     * @var int
     */
    public $freeQuota;

    /**
     * @description The request ID.
     *
     * @example 34DCBC8A-****-****-****-6DAA11D7DDBD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'businessType' => 'BusinessType',
        'freeQuota' => 'FreeQuota',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->freeQuota) {
            $res['FreeQuota'] = $this->freeQuota;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserLogDeliveryQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['FreeQuota'])) {
            $model->freeQuota = $map['FreeQuota'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
