<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerAppsResponseBody;

use AlibabaCloud\Tea\Model;

class containerApps extends Model
{
    /**
     * @var \AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerAppsResponseBody\containerApps\containerApps[]
     */
    public $containerApps;
    protected $_name = [
        'containerApps' => 'ContainerApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containerApps) {
            $res['ContainerApps'] = [];
            if (null !== $this->containerApps && \is_array($this->containerApps)) {
                $n = 0;
                foreach ($this->containerApps as $item) {
                    $res['ContainerApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return containerApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainerApps'])) {
            if (!empty($map['ContainerApps'])) {
                $model->containerApps = [];
                $n                    = 0;
                foreach ($map['ContainerApps'] as $item) {
                    $model->containerApps[$n++] = null !== $item ? \AlibabaCloud\SDK\EHPC\V20180412\Models\ListContainerAppsResponseBody\containerApps\containerApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
