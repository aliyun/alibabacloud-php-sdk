<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnOriginSiteHealthStatusResponseBody;

use AlibabaCloud\Dara\Model;

class originSiteStatus extends Model
{
    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $host;
    protected $_name = [
        'healthStatus' => 'HealthStatus',
        'host' => 'Host',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
