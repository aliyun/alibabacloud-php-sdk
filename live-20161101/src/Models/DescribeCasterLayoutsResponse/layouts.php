<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout;
use AlibabaCloud\Tea\Model;

class layouts extends Model
{
    /**
     * @var layout[]
     */
    public $layout;
    protected $_name = [
        'layout' => 'Layout',
    ];

    public function validate()
    {
        Model::validateRequired('layout', $this->layout, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layout) {
            $res['Layout'] = [];
            if (null !== $this->layout && \is_array($this->layout)) {
                $n = 0;
                foreach ($this->layout as $item) {
                    $res['Layout'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return layouts
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Layout'])) {
            if (!empty($map['Layout'])) {
                $model->layout = [];
                $n             = 0;
                foreach ($map['Layout'] as $item) {
                    $model->layout[$n++] = null !== $item ? layout::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
