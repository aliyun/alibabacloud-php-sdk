<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskTrafficRequest\traffics;

class UpdateTrafficControlTaskTrafficRequest extends Model
{
    /**
     * @var string
     */
    public $environment;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var traffics[]
     */
    public $traffics;

    /**
     * @var string
     */
    public $newParam3;
    protected $_name = [
        'environment' => 'Environment',
        'instanceId' => 'InstanceId',
        'traffics' => 'Traffics',
        'newParam3' => 'new-param-3',
    ];

    public function validate()
    {
        if (\is_array($this->traffics)) {
            Model::validateArray($this->traffics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->traffics) {
            if (\is_array($this->traffics)) {
                $res['Traffics'] = [];
                $n1 = 0;
                foreach ($this->traffics as $item1) {
                    $res['Traffics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->newParam3) {
            $res['new-param-3'] = $this->newParam3;
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
        if (isset($map['Environment'])) {
            $model->environment = $map['Environment'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Traffics'])) {
            if (!empty($map['Traffics'])) {
                $model->traffics = [];
                $n1 = 0;
                foreach ($map['Traffics'] as $item1) {
                    $model->traffics[$n1++] = traffics::fromMap($item1);
                }
            }
        }

        if (isset($map['new-param-3'])) {
            $model->newParam3 = $map['new-param-3'];
        }

        return $model;
    }
}
