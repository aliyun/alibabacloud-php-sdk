<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class DeleteHealthCheckTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string[]
     */
    public $healthCheckTemplateIds;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'healthCheckTemplateIds' => 'HealthCheckTemplateIds',
    ];

    public function validate()
    {
        if (\is_array($this->healthCheckTemplateIds)) {
            Model::validateArray($this->healthCheckTemplateIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->healthCheckTemplateIds) {
            if (\is_array($this->healthCheckTemplateIds)) {
                $res['HealthCheckTemplateIds'] = [];
                $n1 = 0;
                foreach ($this->healthCheckTemplateIds as $item1) {
                    $res['HealthCheckTemplateIds'][$n1] = $item1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['HealthCheckTemplateIds'])) {
            if (!empty($map['HealthCheckTemplateIds'])) {
                $model->healthCheckTemplateIds = [];
                $n1 = 0;
                foreach ($map['HealthCheckTemplateIds'] as $item1) {
                    $model->healthCheckTemplateIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
