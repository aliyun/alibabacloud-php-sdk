<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\DescribeRegionsResponseBody\regions\region;

use AlibabaCloud\Dara\Model;

class serviceResourceTypes extends Model
{
    /**
     * @var string[]
     */
    public $serviceResourceType;
    protected $_name = [
        'serviceResourceType' => 'ServiceResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->serviceResourceType)) {
            Model::validateArray($this->serviceResourceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->serviceResourceType) {
            if (\is_array($this->serviceResourceType)) {
                $res['ServiceResourceType'] = [];
                $n1 = 0;
                foreach ($this->serviceResourceType as $item1) {
                    $res['ServiceResourceType'][$n1] = $item1;
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
        if (isset($map['ServiceResourceType'])) {
            if (!empty($map['ServiceResourceType'])) {
                $model->serviceResourceType = [];
                $n1 = 0;
                foreach ($map['ServiceResourceType'] as $item1) {
                    $model->serviceResourceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
