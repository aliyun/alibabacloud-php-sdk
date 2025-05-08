<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody\analysisResults;

class AnalyzeGitRepositoryResponseBody extends Model
{
    /**
     * @var analysisResults[]
     */
    public $analysisResults;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'analysisResults' => 'AnalysisResults',
        'count' => 'Count',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->analysisResults)) {
            Model::validateArray($this->analysisResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->analysisResults) {
            if (\is_array($this->analysisResults)) {
                $res['AnalysisResults'] = [];
                $n1 = 0;
                foreach ($this->analysisResults as $item1) {
                    $res['AnalysisResults'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
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
        if (isset($map['AnalysisResults'])) {
            if (!empty($map['AnalysisResults'])) {
                $model->analysisResults = [];
                $n1 = 0;
                foreach ($map['AnalysisResults'] as $item1) {
                    $model->analysisResults[$n1++] = analysisResults::fromMap($item1);
                }
            }
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
