<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\DeployHttpApiRequest;

use AlibabaCloud\Dara\Model;

class httpApiConfig extends Model
{
    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string[]
     */
    public $routeIds;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'routeIds' => 'routeIds',
    ];

    public function validate()
    {
        if (\is_array($this->routeIds)) {
            Model::validateArray($this->routeIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }

        if (null !== $this->routeIds) {
            if (\is_array($this->routeIds)) {
                $res['routeIds'] = [];
                $n1 = 0;
                foreach ($this->routeIds as $item1) {
                    $res['routeIds'][$n1] = $item1;
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
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }

        if (isset($map['routeIds'])) {
            if (!empty($map['routeIds'])) {
                $model->routeIds = [];
                $n1 = 0;
                foreach ($map['routeIds'] as $item1) {
                    $model->routeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
