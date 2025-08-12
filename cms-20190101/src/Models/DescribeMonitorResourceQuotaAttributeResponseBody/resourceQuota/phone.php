<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMonitorResourceQuotaAttributeResponseBody\resourceQuota;

use AlibabaCloud\Dara\Model;

class phone extends Model
{
    /**
     * @var int
     */
    public $quotaLimit;

    /**
     * @var int
     */
    public $quotaPackage;

    /**
     * @var int
     */
    public $quotaUsed;
    protected $_name = [
        'quotaLimit' => 'QuotaLimit',
        'quotaPackage' => 'QuotaPackage',
        'quotaUsed' => 'QuotaUsed',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quotaLimit) {
            $res['QuotaLimit'] = $this->quotaLimit;
        }

        if (null !== $this->quotaPackage) {
            $res['QuotaPackage'] = $this->quotaPackage;
        }

        if (null !== $this->quotaUsed) {
            $res['QuotaUsed'] = $this->quotaUsed;
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
        if (isset($map['QuotaLimit'])) {
            $model->quotaLimit = $map['QuotaLimit'];
        }

        if (isset($map['QuotaPackage'])) {
            $model->quotaPackage = $map['QuotaPackage'];
        }

        if (isset($map['QuotaUsed'])) {
            $model->quotaUsed = $map['QuotaUsed'];
        }

        return $model;
    }
}
