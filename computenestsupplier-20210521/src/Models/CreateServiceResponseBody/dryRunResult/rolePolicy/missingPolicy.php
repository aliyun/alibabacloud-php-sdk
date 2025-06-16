<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\CreateServiceResponseBody\dryRunResult\rolePolicy;

use AlibabaCloud\Dara\Model;

class missingPolicy extends Model
{
    /**
     * @var string[]
     */
    public $action;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'action' => 'Action',
        'resource' => 'Resource',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        if (\is_array($this->action)) {
            Model::validateArray($this->action);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            if (\is_array($this->action)) {
                $res['Action'] = [];
                $n1 = 0;
                foreach ($this->action as $item1) {
                    $res['Action'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
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
        if (isset($map['Action'])) {
            if (!empty($map['Action'])) {
                $model->action = [];
                $n1 = 0;
                foreach ($map['Action'] as $item1) {
                    $model->action[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
