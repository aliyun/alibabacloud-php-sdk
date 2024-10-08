<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetSiteLogDeliveryQuotaResponseBody extends Model
{
    /**
     * @example dcdn_log_access_l1
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 3
     *
     * @var int
     */
    public $freeQuota;

    /**
     * @description Id of the request
     *
     * @example 4C14840EF0EAAB6D97CDE0C5F6554ACE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123456****
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'businessType' => 'BusinessType',
        'freeQuota'    => 'FreeQuota',
        'requestId'    => 'RequestId',
        'siteId'       => 'SiteId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSiteLogDeliveryQuotaResponseBody
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
