<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListSoftwaresResponseBody\softwares\softwareInfo\applications\applicationInfo;
use AlibabaCloud\Tea\Model;

class applications extends Model
{
    /**
     * @var applicationInfo[]
     */
    public $applicationInfo;
    protected $_name = [
        'applicationInfo' => 'ApplicationInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationInfo) {
            $res['ApplicationInfo'] = [];
            if (null !== $this->applicationInfo && \is_array($this->applicationInfo)) {
                $n = 0;
                foreach ($this->applicationInfo as $item) {
                    $res['ApplicationInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationInfo'])) {
            if (!empty($map['ApplicationInfo'])) {
                $model->applicationInfo = [];
                $n                      = 0;
                foreach ($map['ApplicationInfo'] as $item) {
                    $model->applicationInfo[$n++] = null !== $item ? applicationInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
