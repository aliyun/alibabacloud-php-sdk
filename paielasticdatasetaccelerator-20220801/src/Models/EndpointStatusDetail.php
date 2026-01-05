<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class EndpointStatusDetail extends Model
{
    /**
     * @var IpPort[]
     */
    public $ipPortMapping;
    protected $_name = [
        'ipPortMapping' => 'IpPortMapping',
    ];

    public function validate()
    {
        if (\is_array($this->ipPortMapping)) {
            Model::validateArray($this->ipPortMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipPortMapping) {
            if (\is_array($this->ipPortMapping)) {
                $res['IpPortMapping'] = [];
                foreach ($this->ipPortMapping as $key1 => $value1) {
                    $res['IpPortMapping'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
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
        if (isset($map['IpPortMapping'])) {
            if (!empty($map['IpPortMapping'])) {
                $model->ipPortMapping = [];
                foreach ($map['IpPortMapping'] as $key1 => $value1) {
                    $model->ipPortMapping[$key1] = IpPort::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
