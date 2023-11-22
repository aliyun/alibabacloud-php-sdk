<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusResponseBody;

use AlibabaCloud\Tea\Model;

class originSiteStatus extends Model
{
    /**
     * @example healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @example host.com
     *
     * @var string
     */
    public $host;
    protected $_name = [
        'healthStatus' => 'HealthStatus',
        'host'         => 'Host',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return originSiteStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }

        return $model;
    }
}
