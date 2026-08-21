<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAiAnalysisResponseBody\aiAnalysisResultList;

class GetMediaAiAnalysisResponseBody extends Model
{
    /**
     * @var aiAnalysisResultList
     */
    public $aiAnalysisResultList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aiAnalysisResultList' => 'AiAnalysisResultList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->aiAnalysisResultList) {
            $this->aiAnalysisResultList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiAnalysisResultList) {
            $res['AiAnalysisResultList'] = null !== $this->aiAnalysisResultList ? $this->aiAnalysisResultList->toArray($noStream) : $this->aiAnalysisResultList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AiAnalysisResultList'])) {
            $model->aiAnalysisResultList = aiAnalysisResultList::fromMap($map['AiAnalysisResultList']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
