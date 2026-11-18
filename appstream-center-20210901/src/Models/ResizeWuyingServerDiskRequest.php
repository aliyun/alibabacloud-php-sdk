<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ResizeWuyingServerDiskRequest\dataDiskList;

class ResizeWuyingServerDiskRequest extends Model
{
    /**
     * @var dataDiskList[]
     */
    public $dataDiskList;

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
        'dataDiskList' => 'DataDiskList',
        'productType' => 'ProductType',
        'systemDiskNewSize' => 'SystemDiskNewSize',
        'wuyingServerId' => 'WuyingServerId',
    ];

    public function validate()
    {
        if (\is_array($this->dataDiskList)) {
            Model::validateArray($this->dataDiskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataDiskList) {
            if (\is_array($this->dataDiskList)) {
                $res['DataDiskList'] = [];
                $n1 = 0;
                foreach ($this->dataDiskList as $item1) {
                    $res['DataDiskList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['DataDiskList'])) {
                $model->dataDiskList = [];
                $n1 = 0;
                foreach ($map['DataDiskList'] as $item1) {
                    $model->dataDiskList[$n1] = dataDiskList::fromMap($item1);
                    ++$n1;
                }
            }
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
