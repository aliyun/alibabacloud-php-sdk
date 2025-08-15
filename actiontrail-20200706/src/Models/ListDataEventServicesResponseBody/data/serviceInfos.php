<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Actiontrail\V20200706\Models\ListDataEventServicesResponseBody\data;

use AlibabaCloud\Dara\Model;

class serviceInfos extends Model
{
    /**
     * @var string[]
     */
    public $eventNames;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'eventNames' => 'EventNames',
        'serviceName' => 'ServiceName',
    ];

    public function validate()
    {
        if (\is_array($this->eventNames)) {
            Model::validateArray($this->eventNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventNames) {
            if (\is_array($this->eventNames)) {
                $res['EventNames'] = [];
                $n1 = 0;
                foreach ($this->eventNames as $item1) {
                    $res['EventNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['EventNames'])) {
            if (!empty($map['EventNames'])) {
                $model->eventNames = [];
                $n1 = 0;
                foreach ($map['EventNames'] as $item1) {
                    $model->eventNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
