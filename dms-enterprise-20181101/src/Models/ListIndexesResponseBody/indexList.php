<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListIndexesResponseBody\indexList\index;
use AlibabaCloud\Tea\Model;

class indexList extends Model
{
    /**
     * @var index[]
     */
    public $index;
    protected $_name = [
        'index' => 'Index',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['Index'] = [];
            if (null !== $this->index && \is_array($this->index)) {
                $n = 0;
                foreach ($this->index as $item) {
                    $res['Index'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return indexList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Index'])) {
            if (!empty($map['Index'])) {
                $model->index = [];
                $n            = 0;
                foreach ($map['Index'] as $item) {
                    $model->index[$n++] = null !== $item ? index::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
