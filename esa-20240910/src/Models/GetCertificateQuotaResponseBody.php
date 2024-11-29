<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateQuotaResponseBody\siteUsage;
use AlibabaCloud\Tea\Model;

class GetCertificateQuotaResponseBody extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $quota;

    /**
     * @example 5
     *
     * @var int
     */
    public $quotaUsage;

    /**
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2
     *
     * @var int
     */
    public $siteCount;

    /**
     * @var siteUsage[]
     */
    public $siteUsage;

    /**
     * @example free
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'quota'      => 'Quota',
        'quotaUsage' => 'QuotaUsage',
        'requestId'  => 'RequestId',
        'siteCount'  => 'SiteCount',
        'siteUsage'  => 'SiteUsage',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
        }
        if (null !== $this->quotaUsage) {
            $res['QuotaUsage'] = $this->quotaUsage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteCount) {
            $res['SiteCount'] = $this->siteCount;
        }
        if (null !== $this->siteUsage) {
            $res['SiteUsage'] = [];
            if (null !== $this->siteUsage && \is_array($this->siteUsage)) {
                $n = 0;
                foreach ($this->siteUsage as $item) {
                    $res['SiteUsage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCertificateQuotaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }
        if (isset($map['QuotaUsage'])) {
            $model->quotaUsage = $map['QuotaUsage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteCount'])) {
            $model->siteCount = $map['SiteCount'];
        }
        if (isset($map['SiteUsage'])) {
            if (!empty($map['SiteUsage'])) {
                $model->siteUsage = [];
                $n                = 0;
                foreach ($map['SiteUsage'] as $item) {
                    $model->siteUsage[$n++] = null !== $item ? siteUsage::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
