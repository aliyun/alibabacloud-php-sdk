<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\totalTokenInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var data\data[]
     */
    public $data;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalCount;

    /**
     * @var totalTokenInfo
     */
    public $totalTokenInfo;
    protected $_name = [
        'data' => 'Data',
        'totalCount' => 'TotalCount',
        'totalTokenInfo' => 'TotalTokenInfo',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->totalTokenInfo) {
            $res['TotalTokenInfo'] = null !== $this->totalTokenInfo ? $this->totalTokenInfo->toMap() : null;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data\data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TotalTokenInfo'])) {
            $model->totalTokenInfo = totalTokenInfo::fromMap($map['TotalTokenInfo']);
        }

        return $model;
    }
}
