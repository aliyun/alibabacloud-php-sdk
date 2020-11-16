<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponse\components\component;
use AlibabaCloud\Tea\Model;

class components extends Model
{
    /**
     * @var component[]
     */
    public $component;
    protected $_name = [
        'component' => 'Component',
    ];

    public function validate()
    {
        Model::validateRequired('component', $this->component, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->component) {
            $res['Component'] = [];
            if (null !== $this->component && \is_array($this->component)) {
                $n = 0;
                foreach ($this->component as $item) {
                    $res['Component'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return components
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Component'])) {
            if (!empty($map['Component'])) {
                $model->component = [];
                $n                = 0;
                foreach ($map['Component'] as $item) {
                    $model->component[$n++] = null !== $item ? component::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
