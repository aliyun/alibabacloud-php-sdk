<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponseBody;

use AlibabaCloud\SDK\Csas\V20230120\Models\ListPolicesForPrivateAccessTagResponseBody\tags\polices;
use AlibabaCloud\Tea\Model;

class tags extends Model
{
    /**
     * @var polices[]
     */
    public $polices;

    /**
     * @example tag-b927baf3e592****
     *
     * @var string
     */
    public $tagId;
    protected $_name = [
        'polices' => 'Polices',
        'tagId'   => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->polices) {
            $res['Polices'] = [];
            if (null !== $this->polices && \is_array($this->polices)) {
                $n = 0;
                foreach ($this->polices as $item) {
                    $res['Polices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tags
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Polices'])) {
            if (!empty($map['Polices'])) {
                $model->polices = [];
                $n              = 0;
                foreach ($map['Polices'] as $item) {
                    $model->polices[$n++] = null !== $item ? polices::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
