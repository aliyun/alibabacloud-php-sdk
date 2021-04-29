<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponseBody;

use AlibabaCloud\Tea\Model;

class dedicateHostList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponseBody\dedicateHostList\dedicateHostList[]
     */
    public $dedicateHostList;
    protected $_name = [
        'dedicateHostList' => 'DedicateHostList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dedicateHostList) {
            $res['DedicateHostList'] = [];
            if (null !== $this->dedicateHostList && \is_array($this->dedicateHostList)) {
                $n = 0;
                foreach ($this->dedicateHostList as $item) {
                    $res['DedicateHostList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dedicateHostList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DedicateHostList'])) {
            if (!empty($map['DedicateHostList'])) {
                $model->dedicateHostList = [];
                $n                       = 0;
                foreach ($map['DedicateHostList'] as $item) {
                    $model->dedicateHostList[$n++] = null !== $item ? \AlibabaCloud\SDK\Rds\V20140815\Models\CreateDedicatedHostResponseBody\dedicateHostList\dedicateHostList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
