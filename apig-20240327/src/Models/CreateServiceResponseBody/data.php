<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $serviceIds;
    protected $_name = [
        'serviceIds' => 'serviceIds',
    ];

    public function validate()
    {
        if (\is_array($this->serviceIds)) {
            Model::validateArray($this->serviceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceIds) {
            if (\is_array($this->serviceIds)) {
                $res['serviceIds'] = [];
                $n1 = 0;
                foreach ($this->serviceIds as $item1) {
                    $res['serviceIds'][$n1++] = $item1;
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
        if (isset($map['serviceIds'])) {
            if (!empty($map['serviceIds'])) {
                $model->serviceIds = [];
                $n1 = 0;
                foreach ($map['serviceIds'] as $item1) {
                    $model->serviceIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
