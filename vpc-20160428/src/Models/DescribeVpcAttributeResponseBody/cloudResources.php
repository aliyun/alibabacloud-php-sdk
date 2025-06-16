<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\cloudResources\cloudResourceSetType;

class cloudResources extends Model
{
    /**
     * @var cloudResourceSetType[]
     */
    public $cloudResourceSetType;
    protected $_name = [
        'cloudResourceSetType' => 'CloudResourceSetType',
    ];

    public function validate()
    {
        if (\is_array($this->cloudResourceSetType)) {
            Model::validateArray($this->cloudResourceSetType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudResourceSetType) {
            if (\is_array($this->cloudResourceSetType)) {
                $res['CloudResourceSetType'] = [];
                $n1 = 0;
                foreach ($this->cloudResourceSetType as $item1) {
                    $res['CloudResourceSetType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CloudResourceSetType'])) {
            if (!empty($map['CloudResourceSetType'])) {
                $model->cloudResourceSetType = [];
                $n1 = 0;
                foreach ($map['CloudResourceSetType'] as $item1) {
                    $model->cloudResourceSetType[$n1] = cloudResourceSetType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
