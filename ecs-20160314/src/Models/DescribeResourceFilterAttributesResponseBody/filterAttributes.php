<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeResourceFilterAttributesResponseBody\filterAttributes\filterAttribute;
use AlibabaCloud\Tea\Model;

class filterAttributes extends Model
{
    /**
     * @var filterAttribute[]
     */
    public $filterAttribute;
    protected $_name = [
        'filterAttribute' => 'FilterAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterAttribute) {
            $res['FilterAttribute'] = [];
            if (null !== $this->filterAttribute && \is_array($this->filterAttribute)) {
                $n = 0;
                foreach ($this->filterAttribute as $item) {
                    $res['FilterAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return filterAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterAttribute'])) {
            if (!empty($map['FilterAttribute'])) {
                $model->filterAttribute = [];
                $n                      = 0;
                foreach ($map['FilterAttribute'] as $item) {
                    $model->filterAttribute[$n++] = null !== $item ? filterAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
