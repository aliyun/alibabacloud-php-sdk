<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListLocalDiskComponentInfoResponseBody\componentInfoList\componentInfo;
use AlibabaCloud\Tea\Model;

class componentInfoList extends Model
{
    /**
     * @var componentInfo[]
     */
    public $componentInfo;
    protected $_name = [
        'componentInfo' => 'ComponentInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentInfo) {
            $res['ComponentInfo'] = [];
            if (null !== $this->componentInfo && \is_array($this->componentInfo)) {
                $n = 0;
                foreach ($this->componentInfo as $item) {
                    $res['ComponentInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return componentInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentInfo'])) {
            if (!empty($map['ComponentInfo'])) {
                $model->componentInfo = [];
                $n                    = 0;
                foreach ($map['ComponentInfo'] as $item) {
                    $model->componentInfo[$n++] = null !== $item ? componentInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
