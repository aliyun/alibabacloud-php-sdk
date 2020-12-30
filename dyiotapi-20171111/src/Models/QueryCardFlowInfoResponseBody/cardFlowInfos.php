<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardFlowInfoResponseBody;

use AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardFlowInfoResponseBody\cardFlowInfos\cardFlowInfo;
use AlibabaCloud\Tea\Model;

class cardFlowInfos extends Model
{
    /**
     * @var cardFlowInfo[]
     */
    public $cardFlowInfo;
    protected $_name = [
        'cardFlowInfo' => 'CardFlowInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardFlowInfo) {
            $res['CardFlowInfo'] = [];
            if (null !== $this->cardFlowInfo && \is_array($this->cardFlowInfo)) {
                $n = 0;
                foreach ($this->cardFlowInfo as $item) {
                    $res['CardFlowInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardFlowInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardFlowInfo'])) {
            if (!empty($map['CardFlowInfo'])) {
                $model->cardFlowInfo = [];
                $n                   = 0;
                foreach ($map['CardFlowInfo'] as $item) {
                    $model->cardFlowInfo[$n++] = null !== $item ? cardFlowInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
