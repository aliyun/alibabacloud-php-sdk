<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskResponseBody\voiceList;

class BatchGetTrainTaskResponseBody extends Model
{
    /**
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
        if (\is_array($this->voiceList)) {
            Model::validateArray($this->voiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->voiceList) {
            if (\is_array($this->voiceList)) {
                $res['voiceList'] = [];
                $n1 = 0;
                foreach ($this->voiceList as $item1) {
                    $res['voiceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['voiceList'])) {
            if (!empty($map['voiceList'])) {
                $model->voiceList = [];
                $n1 = 0;
                foreach ($map['voiceList'] as $item1) {
                    $model->voiceList[$n1++] = voiceList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
