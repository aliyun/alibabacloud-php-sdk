<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyplsapi\V20170525\Models\CreatePickUpWaybillPreQueryRequest\senderInfo\addressInfo;

class senderInfo extends Model
{
    /**
     * @var addressInfo
     */
    public $addressInfo;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'addressInfo' => 'AddressInfo',
        'mobile' => 'Mobile',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (null !== $this->addressInfo) {
            $this->addressInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressInfo) {
            $res['AddressInfo'] = null !== $this->addressInfo ? $this->addressInfo->toArray($noStream) : $this->addressInfo;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AddressInfo'])) {
            $model->addressInfo = addressInfo::fromMap($map['AddressInfo']);
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
