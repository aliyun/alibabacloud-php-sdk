<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20170714\Models\ListSoftwaresResponseBody;

use AlibabaCloud\SDK\EHPC\V20170714\Models\ListSoftwaresResponseBody\softwares\softwareInfo;
use AlibabaCloud\Tea\Model;

class softwares extends Model
{
    /**
     * @var softwareInfo[]
     */
    public $softwareInfo;
    protected $_name = [
        'softwareInfo' => 'SoftwareInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->softwareInfo) {
            $res['SoftwareInfo'] = [];
            if (null !== $this->softwareInfo && \is_array($this->softwareInfo)) {
                $n = 0;
                foreach ($this->softwareInfo as $item) {
                    $res['SoftwareInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return softwares
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SoftwareInfo'])) {
            if (!empty($map['SoftwareInfo'])) {
                $model->softwareInfo = [];
                $n                   = 0;
                foreach ($map['SoftwareInfo'] as $item) {
                    $model->softwareInfo[$n++] = null !== $item ? softwareInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
