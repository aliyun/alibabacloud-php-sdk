<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\GetInstanceResponseBody\data\networkInfo;

use AlibabaCloud\Dara\Model;

class endpoints extends Model
{
    /**
     * @var string
     */
    public $endpointType;

    /**
     * @var string
     */
    public $endpointUrl;

    /**
     * @var string[]
     */
    public $ipWhitelist;
    protected $_name = [
        'endpointType' => 'endpointType',
        'endpointUrl' => 'endpointUrl',
        'ipWhitelist' => 'ipWhitelist',
    ];

    public function validate()
    {
        if (\is_array($this->ipWhitelist)) {
            Model::validateArray($this->ipWhitelist);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointType) {
            $res['endpointType'] = $this->endpointType;
        }

        if (null !== $this->endpointUrl) {
            $res['endpointUrl'] = $this->endpointUrl;
        }

        if (null !== $this->ipWhitelist) {
            if (\is_array($this->ipWhitelist)) {
                $res['ipWhitelist'] = [];
                $n1 = 0;
                foreach ($this->ipWhitelist as $item1) {
                    $res['ipWhitelist'][$n1] = $item1;
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
        if (isset($map['endpointType'])) {
            $model->endpointType = $map['endpointType'];
        }

        if (isset($map['endpointUrl'])) {
            $model->endpointUrl = $map['endpointUrl'];
        }

        if (isset($map['ipWhitelist'])) {
            if (!empty($map['ipWhitelist'])) {
                $model->ipWhitelist = [];
                $n1 = 0;
                foreach ($map['ipWhitelist'] as $item1) {
                    $model->ipWhitelist[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
