<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\MetaQueryFile;

use AlibabaCloud\SDK\Oss\V20190517\Models\MetaQueryUserMeta;
use AlibabaCloud\Tea\Model;

class OSSUserMeta extends Model
{
    /**
     * @var MetaQueryUserMeta[]
     */
    public $userMeta;
    protected $_name = [
        'userMeta' => 'UserMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userMeta) {
            $res['UserMeta'] = [];
            if (null !== $this->userMeta && \is_array($this->userMeta)) {
                $n = 0;
                foreach ($this->userMeta as $item) {
                    $res['UserMeta'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSUserMeta
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserMeta'])) {
            if (!empty($map['UserMeta'])) {
                $model->userMeta = [];
                $n               = 0;
                foreach ($map['UserMeta'] as $item) {
                    $model->userMeta[$n++] = null !== $item ? MetaQueryUserMeta::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
