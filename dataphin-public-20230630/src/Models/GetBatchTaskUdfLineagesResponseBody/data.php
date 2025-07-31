<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskUdfLineagesResponseBody\data\lineageGroupList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var lineageGroupList[]
     */
    public $lineageGroupList;
    protected $_name = [
        'lineageGroupList' => 'LineageGroupList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->lineageGroupList) {
            $res['LineageGroupList'] = [];
            if (null !== $this->lineageGroupList && \is_array($this->lineageGroupList)) {
                $n = 0;
                foreach ($this->lineageGroupList as $item) {
                    $res['LineageGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['LineageGroupList'])) {
            if (!empty($map['LineageGroupList'])) {
                $model->lineageGroupList = [];
                $n = 0;
                foreach ($map['LineageGroupList'] as $item) {
                    $model->lineageGroupList[$n++] = null !== $item ? lineageGroupList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
