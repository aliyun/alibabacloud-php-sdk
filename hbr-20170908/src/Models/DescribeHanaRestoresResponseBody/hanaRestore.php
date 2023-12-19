<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponseBody;

use AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeHanaRestoresResponseBody\hanaRestore\hanaRestores;
use AlibabaCloud\Tea\Model;

class hanaRestore extends Model
{
    /**
     * @var hanaRestores[]
     */
    public $hanaRestores;
    protected $_name = [
        'hanaRestores' => 'HanaRestores',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hanaRestores) {
            $res['HanaRestores'] = [];
            if (null !== $this->hanaRestores && \is_array($this->hanaRestores)) {
                $n = 0;
                foreach ($this->hanaRestores as $item) {
                    $res['HanaRestores'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hanaRestore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HanaRestores'])) {
            if (!empty($map['HanaRestores'])) {
                $model->hanaRestores = [];
                $n                   = 0;
                foreach ($map['HanaRestores'] as $item) {
                    $model->hanaRestores[$n++] = null !== $item ? hanaRestores::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
