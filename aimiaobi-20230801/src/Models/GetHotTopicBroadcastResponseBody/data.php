<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\totalTokenInfo;

class data extends Model
{
    /**
     * @var data\data[]
     */
    public $data;

    /**
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

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        if (null !== $this->totalTokenInfo) {
            $this->totalTokenInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['Data'] = [];
                $n1 = 0;
                foreach ($this->data as $item1) {
                    $res['Data'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->totalTokenInfo) {
            $res['TotalTokenInfo'] = null !== $this->totalTokenInfo ? $this->totalTokenInfo->toArray($noStream) : $this->totalTokenInfo;
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
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n1 = 0;
                foreach ($map['Data'] as $item1) {
                    $model->data[$n1++] = data\data::fromMap($item1);
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
