<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeHealthChecksResponseBody\healthChecks\healthCheck;

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
        if (\is_array($this->healthCheck)) {
            Model::validateArray($this->healthCheck);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->healthCheck) {
            if (\is_array($this->healthCheck)) {
                $res['HealthCheck'] = [];
                $n1 = 0;
                foreach ($this->healthCheck as $item1) {
                    $res['HealthCheck'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['HealthCheck'])) {
            if (!empty($map['HealthCheck'])) {
                $model->healthCheck = [];
                $n1 = 0;
                foreach ($map['HealthCheck'] as $item1) {
                    $model->healthCheck[$n1] = healthCheck::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
