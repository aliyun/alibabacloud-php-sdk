<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody;

use AlibabaCloud\Tea\Model;

class errorInfoList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\errorInfoList\errorInfoList[]
     */
    public $errorInfoList;
    protected $_name = [
        'errorInfoList' => 'errorInfoList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorInfoList) {
            $res['errorInfoList'] = [];
            if (null !== $this->errorInfoList && \is_array($this->errorInfoList)) {
                $n = 0;
                foreach ($this->errorInfoList as $item) {
                    $res['errorInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return errorInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['errorInfoList'])) {
            if (!empty($map['errorInfoList'])) {
                $model->errorInfoList = [];
                $n                    = 0;
                foreach ($map['errorInfoList'] as $item) {
                    $model->errorInfoList[$n++] = null !== $item ? \AlibabaCloud\SDK\Vpc\V20160428\Models\CreateHighReliablePhysicalConnectionResponseBody\errorInfoList\errorInfoList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
