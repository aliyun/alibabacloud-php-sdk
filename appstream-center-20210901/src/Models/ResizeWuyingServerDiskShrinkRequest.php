<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ResizeWuyingServerDiskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dataDiskListShrink;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $systemDiskNewSize;

    /**
     * @var string
     */
    public $wuyingServerId;
    protected $_name = [
        'dataDiskListShrink' => 'DataDiskList',
        'productType' => 'ProductType',
        'systemDiskNewSize' => 'SystemDiskNewSize',
        'wuyingServerId' => 'WuyingServerId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskListShrink) {
            $res['DataDiskList'] = $this->dataDiskListShrink;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->systemDiskNewSize) {
            $res['SystemDiskNewSize'] = $this->systemDiskNewSize;
        }

        if (null !== $this->wuyingServerId) {
            $res['WuyingServerId'] = $this->wuyingServerId;
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
        if (isset($map['DataDiskList'])) {
            $model->dataDiskListShrink = $map['DataDiskList'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['SystemDiskNewSize'])) {
            $model->systemDiskNewSize = $map['SystemDiskNewSize'];
        }

        if (isset($map['WuyingServerId'])) {
            $model->wuyingServerId = $map['WuyingServerId'];
        }

        return $model;
    }
}
