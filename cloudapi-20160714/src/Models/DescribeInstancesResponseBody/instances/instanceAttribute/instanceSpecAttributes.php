<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstancesResponseBody\instances\instanceAttribute\instanceSpecAttributes\specAttribute;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->specAttribute) {
            $res['SpecAttribute'] = [];
            if (null !== $this->specAttribute && \is_array($this->specAttribute)) {
                $n = 0;
                foreach ($this->specAttribute as $item) {
                    $res['SpecAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceSpecAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SpecAttribute'])) {
            if (!empty($map['SpecAttribute'])) {
                $model->specAttribute = [];
                $n                    = 0;
                foreach ($map['SpecAttribute'] as $item) {
                    $model->specAttribute[$n++] = null !== $item ? specAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
