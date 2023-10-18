<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class physicalConnectionList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\physicalConnectionList\physicalConnectionList[]
     */
    public $physicalConnectionList;
    protected $_name = [
        'physicalConnectionList' => 'physicalConnectionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->physicalConnectionList) {
            $res['physicalConnectionList'] = [];
            if (null !== $this->physicalConnectionList && \is_array($this->physicalConnectionList)) {
                $n = 0;
                foreach ($this->physicalConnectionList as $item) {
                    $res['physicalConnectionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return physicalConnectionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['physicalConnectionList'])) {
            if (!empty($map['physicalConnectionList'])) {
                $model->physicalConnectionList = [];
                $n                             = 0;
                foreach ($map['physicalConnectionList'] as $item) {
                    $model->physicalConnectionList[$n++] = null !== $item ? \AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\physicalConnectionList\physicalConnectionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
