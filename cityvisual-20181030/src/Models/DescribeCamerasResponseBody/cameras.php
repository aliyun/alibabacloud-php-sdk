<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCamerasResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeCamerasResponseBody\cameras\camera;
use AlibabaCloud\Tea\Model;

class cameras extends Model
{
    /**
     * @var camera[]
     */
    public $camera;
    protected $_name = [
        'camera' => 'Camera',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->camera) {
            $res['Camera'] = [];
            if (null !== $this->camera && \is_array($this->camera)) {
                $n = 0;
                foreach ($this->camera as $item) {
                    $res['Camera'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cameras
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Camera'])) {
            if (!empty($map['Camera'])) {
                $model->camera = [];
                $n             = 0;
                foreach ($map['Camera'] as $item) {
                    $model->camera[$n++] = null !== $item ? camera::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
