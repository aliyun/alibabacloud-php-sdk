<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponseBody;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponseBody\healthChecks\healthCheck;
use AlibabaCloud\Tea\Model;

class healthChecks extends Model
{
    /**
     * @var healthCheck[]
     */
    public $healthCheck;
    protected $_name = [
        'healthCheck' => 'HealthCheck',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = [];
            if (null !== $this->healthCheck && \is_array($this->healthCheck)) {
                $n = 0;
                foreach ($this->healthCheck as $item) {
                    $res['HealthCheck'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return healthChecks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HealthCheck'])) {
            if (!empty($map['HealthCheck'])) {
                $model->healthCheck = [];
                $n                  = 0;
                foreach ($map['HealthCheck'] as $item) {
                    $model->healthCheck[$n++] = null !== $item ? healthCheck::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
