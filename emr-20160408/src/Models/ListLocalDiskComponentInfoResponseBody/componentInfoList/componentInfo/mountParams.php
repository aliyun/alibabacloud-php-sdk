<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo\mountParams\mountParam;
use AlibabaCloud\Tea\Model;

class mountParams extends Model
{
    /**
     * @var mountParam[]
     */
    public $mountParam;
    protected $_name = [
        'mountParam' => 'MountParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountParam) {
            $res['MountParam'] = [];
            if (null !== $this->mountParam && \is_array($this->mountParam)) {
                $n = 0;
                foreach ($this->mountParam as $item) {
                    $res['MountParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountParam'])) {
            if (!empty($map['MountParam'])) {
                $model->mountParam = [];
                $n                 = 0;
                foreach ($map['MountParam'] as $item) {
                    $model->mountParam[$n++] = null !== $item ? mountParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
