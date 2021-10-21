<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOfficialFileCustomListResponseBody;

use AlibabaCloud\SDK\Trademark\V20180724\Models\QueryOfficialFileCustomListResponseBody\data\customList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var customList[]
     */
    public $customList;
    protected $_name = [
        'customList' => 'CustomList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customList) {
            $res['CustomList'] = [];
            if (null !== $this->customList && \is_array($this->customList)) {
                $n = 0;
                foreach ($this->customList as $item) {
                    $res['CustomList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomList'])) {
            if (!empty($map['CustomList'])) {
                $model->customList = [];
                $n                 = 0;
                foreach ($map['CustomList'] as $item) {
                    $model->customList[$n++] = null !== $item ? customList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
