<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\ListServicesResponseBody\services\service;

class services extends Model
{
    /**
     * @var service[]
     */
    public $service;
    protected $_name = [
        'service' => 'Service',
    ];

    public function validate()
    {
        if (\is_array($this->service)) {
            Model::validateArray($this->service);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->service) {
            if (\is_array($this->service)) {
                $res['Service'] = [];
                $n1 = 0;
                foreach ($this->service as $item1) {
                    $res['Service'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Service'])) {
            if (!empty($map['Service'])) {
                $model->service = [];
                $n1 = 0;
                foreach ($map['Service'] as $item1) {
                    $model->service[$n1] = service::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
