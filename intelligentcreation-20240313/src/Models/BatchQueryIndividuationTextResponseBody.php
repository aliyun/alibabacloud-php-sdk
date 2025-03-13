<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchQueryIndividuationTextResponseBody\textList;
use AlibabaCloud\Tea\Model;

class BatchQueryIndividuationTextResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example 14878724-A835-578D-9DD5-4779ADCE9221
     *
     * @var string
     */
    public $requestId;

    /**
     * @var textList[]
     */
    public $textList;
    protected $_name = [
        'requestId' => 'requestId',
        'textList'  => 'textList',
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
        if (null !== $this->textList) {
            $res['textList'] = [];
            if (null !== $this->textList && \is_array($this->textList)) {
                $n = 0;
                foreach ($this->textList as $item) {
                    $res['textList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchQueryIndividuationTextResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['textList'])) {
            if (!empty($map['textList'])) {
                $model->textList = [];
                $n               = 0;
                foreach ($map['textList'] as $item) {
                    $model->textList[$n++] = null !== $item ? textList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
