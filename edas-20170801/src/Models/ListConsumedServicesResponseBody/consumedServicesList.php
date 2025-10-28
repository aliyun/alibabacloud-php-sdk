<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListConsumedServicesResponseBody\consumedServicesList\listConsumedServices;

class consumedServicesList extends Model
{
    /**
     * @var listConsumedServices[]
     */
    public $listConsumedServices;
    protected $_name = [
        'listConsumedServices' => 'ListConsumedServices',
    ];

    public function validate()
    {
        if (\is_array($this->listConsumedServices)) {
            Model::validateArray($this->listConsumedServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listConsumedServices) {
            if (\is_array($this->listConsumedServices)) {
                $res['ListConsumedServices'] = [];
                $n1 = 0;
                foreach ($this->listConsumedServices as $item1) {
                    $res['ListConsumedServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ListConsumedServices'])) {
            if (!empty($map['ListConsumedServices'])) {
                $model->listConsumedServices = [];
                $n1 = 0;
                foreach ($map['ListConsumedServices'] as $item1) {
                    $model->listConsumedServices[$n1] = listConsumedServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
