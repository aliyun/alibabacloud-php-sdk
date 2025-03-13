<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskResponseBody\voiceList;
use AlibabaCloud\Tea\Model;

class BatchGetTrainTaskResponseBody extends Model
{
    /**
     * @example 2226A26A-26E5-5AB9-A14A-54D612FCF96A
     *
     * @var string
     */
    public $requestId;

    /**
     * @var voiceList[]
     */
    public $voiceList;
    protected $_name = [
        'requestId' => 'requestId',
        'voiceList' => 'voiceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->voiceList) {
            $res['voiceList'] = [];
            if (null !== $this->voiceList && \is_array($this->voiceList)) {
                $n = 0;
                foreach ($this->voiceList as $item) {
                    $res['voiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetTrainTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['voiceList'])) {
            if (!empty($map['voiceList'])) {
                $model->voiceList = [];
                $n                = 0;
                foreach ($map['voiceList'] as $item) {
                    $model->voiceList[$n++] = null !== $item ? voiceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
