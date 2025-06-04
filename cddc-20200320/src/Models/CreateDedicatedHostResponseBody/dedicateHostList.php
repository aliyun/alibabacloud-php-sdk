<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cddc\V20200320\Models\CreateDedicatedHostResponseBody\dedicateHostList\dedicateHostList;

class dedicateHostList extends Model
{
    /**
     * @var dedicateHostList[]
     */
    public $dedicateHostList;
    protected $_name = [
        'dedicateHostList' => 'DedicateHostList',
    ];

    public function validate()
    {
        if (\is_array($this->dedicateHostList)) {
            Model::validateArray($this->dedicateHostList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicateHostList) {
            if (\is_array($this->dedicateHostList)) {
                $res['DedicateHostList'] = [];
                $n1 = 0;
                foreach ($this->dedicateHostList as $item1) {
                    $res['DedicateHostList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DedicateHostList'])) {
            if (!empty($map['DedicateHostList'])) {
                $model->dedicateHostList = [];
                $n1 = 0;
                foreach ($map['DedicateHostList'] as $item1) {
                    $model->dedicateHostList[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
