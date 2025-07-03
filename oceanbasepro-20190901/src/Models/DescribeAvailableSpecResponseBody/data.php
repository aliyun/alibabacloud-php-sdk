<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableSpecResponseBody\data\availableSpecifications;

class data extends Model
{
    /**
     * @var availableSpecifications[]
     */
    public $availableSpecifications;
    protected $_name = [
        'availableSpecifications' => 'AvailableSpecifications',
    ];

    public function validate()
    {
        if (\is_array($this->availableSpecifications)) {
            Model::validateArray($this->availableSpecifications);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->availableSpecifications) {
            if (\is_array($this->availableSpecifications)) {
                $res['AvailableSpecifications'] = [];
                $n1 = 0;
                foreach ($this->availableSpecifications as $item1) {
                    $res['AvailableSpecifications'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AvailableSpecifications'])) {
            if (!empty($map['AvailableSpecifications'])) {
                $model->availableSpecifications = [];
                $n1 = 0;
                foreach ($map['AvailableSpecifications'] as $item1) {
                    $model->availableSpecifications[$n1] = availableSpecifications::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
