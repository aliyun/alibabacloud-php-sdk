<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceUpgradeStatusResponseBody;

use AlibabaCloud\SDK\Wyota\V20210420\Models\GetDeviceUpgradeStatusResponseBody\data\appOtaStatusDTOList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var appOtaStatusDTOList[]
     */
    public $appOtaStatusDTOList;
    protected $_name = [
        'appOtaStatusDTOList' => 'AppOtaStatusDTOList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appOtaStatusDTOList) {
            $res['AppOtaStatusDTOList'] = [];
            if (null !== $this->appOtaStatusDTOList && \is_array($this->appOtaStatusDTOList)) {
                $n = 0;
                foreach ($this->appOtaStatusDTOList as $item) {
                    $res['AppOtaStatusDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AppOtaStatusDTOList'])) {
            if (!empty($map['AppOtaStatusDTOList'])) {
                $model->appOtaStatusDTOList = [];
                $n                          = 0;
                foreach ($map['AppOtaStatusDTOList'] as $item) {
                    $model->appOtaStatusDTOList[$n++] = null !== $item ? appOtaStatusDTOList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
