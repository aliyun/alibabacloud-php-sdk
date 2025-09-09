<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeDrdsDBClusterResponseBody\dbInstance\endpoints\endpoint;

class endpoints extends Model
{
    /**
     * @var endpoint[]
     */
    public $endpoint;
    protected $_name = [
        'endpoint' => 'Endpoint',
    ];

    public function validate()
    {
        if (\is_array($this->endpoint)) {
            Model::validateArray($this->endpoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpoint) {
            if (\is_array($this->endpoint)) {
                $res['Endpoint'] = [];
                $n1 = 0;
                foreach ($this->endpoint as $item1) {
                    $res['Endpoint'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Endpoint'])) {
            if (!empty($map['Endpoint'])) {
                $model->endpoint = [];
                $n1 = 0;
                foreach ($map['Endpoint'] as $item1) {
                    $model->endpoint[$n1] = endpoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
