<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GetSpeechLicenseDeviceStatisticsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 100
     *
     * @var int
     */
    public $availableQuota;

    /**
     * @example 100
     *
     * @var int
     */
    public $expiredQuota;

    /**
     * @example 100
     *
     * @var int
     */
    public $expiringQuota;
    protected $_name = [
        'availableQuota' => 'AvailableQuota',
        'expiredQuota'   => 'ExpiredQuota',
        'expiringQuota'  => 'ExpiringQuota',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
