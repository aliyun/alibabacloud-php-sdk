<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class SpotStockItem extends Model
{
    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var SpotStockInternalInfo[]
     */
    public $internalInfo;

    /**
     * @var string
     */
    public $stockStatus;
    protected $_name = [
        'instanceType' => 'instanceType',
        'internalInfo' => 'internalInfo',
        'stockStatus' => 'stockStatus',
    ];

    public function validate()
    {
        if (\is_array($this->internalInfo)) {
            Model::validateArray($this->internalInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['instanceType'] = $this->instanceType;
        }

        if (null !== $this->internalInfo) {
            if (\is_array($this->internalInfo)) {
                $res['internalInfo'] = [];
                $n1 = 0;
                foreach ($this->internalInfo as $item1) {
                    $res['internalInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->stockStatus) {
            $res['stockStatus'] = $this->stockStatus;
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
        if (isset($map['instanceType'])) {
            $model->instanceType = $map['instanceType'];
        }

        if (isset($map['internalInfo'])) {
            if (!empty($map['internalInfo'])) {
                $model->internalInfo = [];
                $n1 = 0;
                foreach ($map['internalInfo'] as $item1) {
                    $model->internalInfo[$n1] = SpotStockInternalInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['stockStatus'])) {
            $model->stockStatus = $map['stockStatus'];
        }

        return $model;
    }
}
