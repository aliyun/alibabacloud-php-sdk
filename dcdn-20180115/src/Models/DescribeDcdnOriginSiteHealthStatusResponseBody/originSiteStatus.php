<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusResponseBody;

use AlibabaCloud\Tea\Model;

class originSiteStatus extends Model
{
    /**
     * @description The health status of the origin server. Each point of presence (POP) periodically initiates a probe request to the configured origin domain name. If the POP receives a response from the origin server in 5 seconds, the probe is considered successful. After the probe data for each POP is collected, the health status of the origin server is calculated based on the proportion of successful probes. Valid values:
     *
     *   unknown: The probe data of the origin server is not obtained because the configurations of the origin server have been changed recently. Try again later.
     *   healthy: The proportion of successful probes is higher than 80%.
     *   degraded: The proportion of successful probes is higher than 0% and lower than or equal to 80%.
     *   critical: All probing requests to the origin server failed.
     *
     * @example healthy
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The origin domain name that you configured in the DCDN console, which can be an IPv4 address, IPv6 address, common domain name, or Object Storage Service (OSS) domain name.
     *
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
