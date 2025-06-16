<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetCertificateQuotaResponseBody\siteUsage;

class GetCertificateQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $quota;

    /**
     * @var int
     */
    public $quotaUsage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $siteCount;

    /**
     * @var siteUsage[]
     */
    public $siteUsage;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'quota' => 'Quota',
        'quotaUsage' => 'QuotaUsage',
        'requestId' => 'RequestId',
        'siteCount' => 'SiteCount',
        'siteUsage' => 'SiteUsage',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->siteUsage)) {
            Model::validateArray($this->siteUsage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->siteUsage)) {
                $res['SiteUsage'] = [];
                $n1 = 0;
                foreach ($this->siteUsage as $item1) {
                    $res['SiteUsage'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
                $n1 = 0;
                foreach ($map['SiteUsage'] as $item1) {
                    $model->siteUsage[$n1] = siteUsage::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
