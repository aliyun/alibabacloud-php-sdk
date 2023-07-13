<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionResponseBody\data\failDeviceSimpleInfoList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var failDeviceSimpleInfoList
     */
    public $failDeviceSimpleInfoList;
    protected $_name = [
        'failDeviceSimpleInfoList' => 'FailDeviceSimpleInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failDeviceSimpleInfoList) {
            $res['FailDeviceSimpleInfoList'] = null !== $this->failDeviceSimpleInfoList ? $this->failDeviceSimpleInfoList->toMap() : null;
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
        if (isset($map['FailDeviceSimpleInfoList'])) {
            $model->failDeviceSimpleInfoList = failDeviceSimpleInfoList::fromMap($map['FailDeviceSimpleInfoList']);
        }

        return $model;
    }
}
