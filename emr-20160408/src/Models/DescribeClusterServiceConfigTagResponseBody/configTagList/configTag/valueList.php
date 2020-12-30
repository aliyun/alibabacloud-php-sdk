<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList\configTag;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceConfigTagResponseBody\configTagList\configTag\valueList\value;
use AlibabaCloud\Tea\Model;

class valueList extends Model
{
    /**
     * @var value[]
     */
    public $value;
    protected $_name = [
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->value) {
            $res['Value'] = [];
            if (null !== $this->value && \is_array($this->value)) {
                $n = 0;
                foreach ($this->value as $item) {
                    $res['Value'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = [];
                $n            = 0;
                foreach ($map['Value'] as $item) {
                    $model->value[$n++] = null !== $item ? value::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
