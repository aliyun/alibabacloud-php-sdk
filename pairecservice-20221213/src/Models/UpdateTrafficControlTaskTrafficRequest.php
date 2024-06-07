<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateTrafficControlTaskTrafficRequest\traffics;
use AlibabaCloud\Tea\Model;

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
        'instanceId'  => 'InstanceId',
        'traffics'    => 'Traffics',
        'newParam3'   => 'new-param-3',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->environment) {
            $res['Environment'] = $this->environment;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->traffics) {
            $res['Traffics'] = [];
            if (null !== $this->traffics && \is_array($this->traffics)) {
                $n = 0;
                foreach ($this->traffics as $item) {
                    $res['Traffics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->newParam3) {
            $res['new-param-3'] = $this->newParam3;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrafficControlTaskTrafficRequest
     */
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
                $n               = 0;
                foreach ($map['Traffics'] as $item) {
                    $model->traffics[$n++] = null !== $item ? traffics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['new-param-3'])) {
            $model->newParam3 = $map['new-param-3'];
        }

        return $model;
    }
}
