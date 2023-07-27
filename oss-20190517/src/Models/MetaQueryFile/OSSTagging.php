<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models\MetaQueryFile;

use AlibabaCloud\SDK\Oss\V20190517\Models\MetaQueryTagging;
use AlibabaCloud\Tea\Model;

class OSSTagging extends Model
{
    /**
     * @var MetaQueryTagging[]
     */
    public $tagging;
    protected $_name = [
        'tagging' => 'Tagging',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagging) {
            $res['Tagging'] = [];
            if (null !== $this->tagging && \is_array($this->tagging)) {
                $n = 0;
                foreach ($this->tagging as $item) {
                    $res['Tagging'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSTagging
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Tagging'])) {
            if (!empty($map['Tagging'])) {
                $model->tagging = [];
                $n              = 0;
                foreach ($map['Tagging'] as $item) {
                    $model->tagging[$n++] = null !== $item ? MetaQueryTagging::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
