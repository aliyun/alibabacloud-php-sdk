<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAiAnalysisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaAiAnalysisResponseBody\aiAnalysisResultList\aiAnalysisResult;

class aiAnalysisResultList extends Model
{
    /**
     * @var aiAnalysisResult[]
     */
    public $aiAnalysisResult;
    protected $_name = [
        'aiAnalysisResult' => 'AiAnalysisResult',
    ];

    public function validate()
    {
        if (\is_array($this->aiAnalysisResult)) {
            Model::validateArray($this->aiAnalysisResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiAnalysisResult) {
            if (\is_array($this->aiAnalysisResult)) {
                $res['AiAnalysisResult'] = [];
                $n1 = 0;
                foreach ($this->aiAnalysisResult as $item1) {
                    $res['AiAnalysisResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AiAnalysisResult'])) {
            if (!empty($map['AiAnalysisResult'])) {
                $model->aiAnalysisResult = [];
                $n1 = 0;
                foreach ($map['AiAnalysisResult'] as $item1) {
                    $model->aiAnalysisResult[$n1] = aiAnalysisResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
