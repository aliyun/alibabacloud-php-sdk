<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechLicenseDeviceStatisticsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $availableQuota;

    /**
     * @var int
     */
    public $expiredQuota;

    /**
     * @var int
     */
    public $expiringQuota;
    protected $_name = [
        'availableQuota' => 'AvailableQuota',
        'expiredQuota' => 'ExpiredQuota',
        'expiringQuota' => 'ExpiringQuota',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableQuota) {
            $res['AvailableQuota'] = $this->availableQuota;
        }

        if (null !== $this->expiredQuota) {
            $res['ExpiredQuota'] = $this->expiredQuota;
        }

        if (null !== $this->expiringQuota) {
            $res['ExpiringQuota'] = $this->expiringQuota;
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
        if (isset($map['AvailableQuota'])) {
            $model->availableQuota = $map['AvailableQuota'];
        }

        if (isset($map['ExpiredQuota'])) {
            $model->expiredQuota = $map['ExpiredQuota'];
        }

        if (isset($map['ExpiringQuota'])) {
            $model->expiringQuota = $map['ExpiringQuota'];
        }

        return $model;
    }
}
