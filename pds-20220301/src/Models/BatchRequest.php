<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pds\V20220301\Models\BatchRequest\requests;

class BatchRequest extends Model
{
    /**
     * @var requests[]
     */
    public $requests;

    /**
     * @var string
     */
    public $resource;
    protected $_name = [
        'requests' => 'requests',
        'resource' => 'resource',
    ];

    public function validate()
    {
        if (\is_array($this->requests)) {
            Model::validateArray($this->requests);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requests) {
            if (\is_array($this->requests)) {
                $res['requests'] = [];
                $n1 = 0;
                foreach ($this->requests as $item1) {
                    $res['requests'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
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
        if (isset($map['requests'])) {
            if (!empty($map['requests'])) {
                $model->requests = [];
                $n1 = 0;
                foreach ($map['requests'] as $item1) {
                    $model->requests[$n1++] = requests::fromMap($item1);
                }
            }
        }

        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        return $model;
    }
}
