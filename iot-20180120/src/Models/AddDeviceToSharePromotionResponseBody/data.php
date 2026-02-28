<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\AddDeviceToSharePromotionResponseBody\data\failDeviceSimpleInfoList;

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
        if (null !== $this->failDeviceSimpleInfoList) {
            $this->failDeviceSimpleInfoList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failDeviceSimpleInfoList) {
            $res['FailDeviceSimpleInfoList'] = null !== $this->failDeviceSimpleInfoList ? $this->failDeviceSimpleInfoList->toArray($noStream) : $this->failDeviceSimpleInfoList;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FailDeviceSimpleInfoList'])) {
            $model->failDeviceSimpleInfoList = failDeviceSimpleInfoList::fromMap($map['FailDeviceSimpleInfoList']);
        }

        return $model;
    }
}
