<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\physicalConnectionList\physicalConnectionList;

class physicalConnectionList extends Model
{
    /**
     * @var physicalConnectionList[]
     */
    public $physicalConnectionList;
    protected $_name = [
        'physicalConnectionList' => 'physicalConnectionList',
    ];

    public function validate()
    {
        if (\is_array($this->physicalConnectionList)) {
            Model::validateArray($this->physicalConnectionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->physicalConnectionList) {
            if (\is_array($this->physicalConnectionList)) {
                $res['physicalConnectionList'] = [];
                $n1 = 0;
                foreach ($this->physicalConnectionList as $item1) {
                    $res['physicalConnectionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['physicalConnectionList'])) {
            if (!empty($map['physicalConnectionList'])) {
                $model->physicalConnectionList = [];
                $n1 = 0;
                foreach ($map['physicalConnectionList'] as $item1) {
                    $model->physicalConnectionList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
