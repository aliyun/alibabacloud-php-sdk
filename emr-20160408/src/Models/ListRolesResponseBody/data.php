<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListRolesResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListRolesResponseBody\data\roleDTO;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var roleDTO[]
     */
    public $roleDTO;
    protected $_name = [
        'roleDTO' => 'roleDTO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->roleDTO) {
            $res['roleDTO'] = [];
            if (null !== $this->roleDTO && \is_array($this->roleDTO)) {
                $n = 0;
                foreach ($this->roleDTO as $item) {
                    $res['roleDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['roleDTO'])) {
            if (!empty($map['roleDTO'])) {
                $model->roleDTO = [];
                $n              = 0;
                foreach ($map['roleDTO'] as $item) {
                    $model->roleDTO[$n++] = null !== $item ? roleDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
