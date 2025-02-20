<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mssp\V20161228\Models\GetAttackedAssetDealResponseBody\data\ecsTrendList;

class data extends Model
{
    /**
     * @var ecsTrendList[]
     */
    public $ecsTrendList;
    protected $_name = [
        'ecsTrendList' => 'EcsTrendList',
    ];

    public function validate()
    {
        if (\is_array($this->ecsTrendList)) {
            Model::validateArray($this->ecsTrendList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ecsTrendList) {
            if (\is_array($this->ecsTrendList)) {
                $res['EcsTrendList'] = [];
                $n1                  = 0;
                foreach ($this->ecsTrendList as $item1) {
                    $res['EcsTrendList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EcsTrendList'])) {
            if (!empty($map['EcsTrendList'])) {
                $model->ecsTrendList = [];
                $n1                  = 0;
                foreach ($map['EcsTrendList'] as $item1) {
                    $model->ecsTrendList[$n1++] = ecsTrendList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
