<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListPublishedServicesResponseBody\publishedServicesList\listPublishedServices;

class publishedServicesList extends Model
{
    /**
     * @var listPublishedServices[]
     */
    public $listPublishedServices;
    protected $_name = [
        'listPublishedServices' => 'ListPublishedServices',
    ];

    public function validate()
    {
        if (\is_array($this->listPublishedServices)) {
            Model::validateArray($this->listPublishedServices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->listPublishedServices) {
            if (\is_array($this->listPublishedServices)) {
                $res['ListPublishedServices'] = [];
                $n1 = 0;
                foreach ($this->listPublishedServices as $item1) {
                    $res['ListPublishedServices'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ListPublishedServices'])) {
            if (!empty($map['ListPublishedServices'])) {
                $model->listPublishedServices = [];
                $n1 = 0;
                foreach ($map['ListPublishedServices'] as $item1) {
                    $model->listPublishedServices[$n1] = listPublishedServices::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
