<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\instanceSpecAttributes\specAttribute;

class instanceSpecAttributes extends Model
{
    /**
     * @var specAttribute[]
     */
    public $specAttribute;
    protected $_name = [
        'specAttribute' => 'SpecAttribute',
    ];

    public function validate()
    {
        if (\is_array($this->specAttribute)) {
            Model::validateArray($this->specAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->specAttribute) {
            if (\is_array($this->specAttribute)) {
                $res['SpecAttribute'] = [];
                $n1                   = 0;
                foreach ($this->specAttribute as $item1) {
                    $res['SpecAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SpecAttribute'])) {
            if (!empty($map['SpecAttribute'])) {
                $model->specAttribute = [];
                $n1                   = 0;
                foreach ($map['SpecAttribute'] as $item1) {
                    $model->specAttribute[$n1++] = specAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
