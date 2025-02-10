<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpcAttributeResponseBody\associatedPropagationSources\associatedPropagationSources;

class associatedPropagationSources extends Model
{
    /**
     * @var associatedPropagationSources[]
     */
    public $associatedPropagationSources;
    protected $_name = [
        'associatedPropagationSources' => 'AssociatedPropagationSources',
    ];

    public function validate()
    {
        if (\is_array($this->associatedPropagationSources)) {
            Model::validateArray($this->associatedPropagationSources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedPropagationSources) {
            if (\is_array($this->associatedPropagationSources)) {
                $res['AssociatedPropagationSources'] = [];
                $n1                                  = 0;
                foreach ($this->associatedPropagationSources as $item1) {
                    $res['AssociatedPropagationSources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AssociatedPropagationSources'])) {
            if (!empty($map['AssociatedPropagationSources'])) {
                $model->associatedPropagationSources = [];
                $n1                                  = 0;
                foreach ($map['AssociatedPropagationSources'] as $item1) {
                    $model->associatedPropagationSources[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
