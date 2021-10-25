<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\QueryServicePackAndPriceResponseBody\servicePack\servicePackInfo;
use AlibabaCloud\Tea\Model;

class servicePack extends Model
{
    /**
     * @var servicePackInfo[]
     */
    public $servicePackInfo;
    protected $_name = [
        'servicePackInfo' => 'ServicePackInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->servicePackInfo) {
            $res['ServicePackInfo'] = [];
            if (null !== $this->servicePackInfo && \is_array($this->servicePackInfo)) {
                $n = 0;
                foreach ($this->servicePackInfo as $item) {
                    $res['ServicePackInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return servicePack
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServicePackInfo'])) {
            if (!empty($map['ServicePackInfo'])) {
                $model->servicePackInfo = [];
                $n                      = 0;
                foreach ($map['ServicePackInfo'] as $item) {
                    $model->servicePackInfo[$n++] = null !== $item ? servicePackInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
