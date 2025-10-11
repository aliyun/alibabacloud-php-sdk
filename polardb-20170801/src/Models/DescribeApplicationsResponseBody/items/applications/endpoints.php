<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationsResponseBody\items\applications;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeApplicationsResponseBody\items\applications\endpoints\endpoint;

class endpoints extends Model
{
    /**
     * @var endpoint[]
     */
    public $endpoint;
    protected $_name = [
        'endpoint' => 'endpoint',
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
                $res['endpoint'] = [];
                $n1 = 0;
                foreach ($this->endpoint as $item1) {
                    $res['endpoint'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['endpoint'])) {
            if (!empty($map['endpoint'])) {
                $model->endpoint = [];
                $n1 = 0;
                foreach ($map['endpoint'] as $item1) {
                    $model->endpoint[$n1] = endpoint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
