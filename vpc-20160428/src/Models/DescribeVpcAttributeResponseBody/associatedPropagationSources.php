<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody;

use AlibabaCloud\Tea\Model;

class associatedPropagationSources extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedPropagationSources\associatedPropagationSources[]
     */
    public $associatedPropagationSources;
    protected $_name = [
        'associatedPropagationSources' => 'AssociatedPropagationSources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associatedPropagationSources) {
            $res['AssociatedPropagationSources'] = [];
            if (null !== $this->associatedPropagationSources && \is_array($this->associatedPropagationSources)) {
                $n = 0;
                foreach ($this->associatedPropagationSources as $item) {
                    $res['AssociatedPropagationSources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return associatedPropagationSources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssociatedPropagationSources'])) {
            if (!empty($map['AssociatedPropagationSources'])) {
                $model->associatedPropagationSources = [];
                $n                                   = 0;
                foreach ($map['AssociatedPropagationSources'] as $item) {
                    $model->associatedPropagationSources[$n++] = null !== $item ? \AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedPropagationSources\associatedPropagationSources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
