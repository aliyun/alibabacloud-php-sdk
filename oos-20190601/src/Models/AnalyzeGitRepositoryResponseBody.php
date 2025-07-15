<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\SDK\Oos\V20190601\Models\AnalyzeGitRepositoryResponseBody\analysisResults;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->analysisResults) {
            $res['AnalysisResults'] = [];
            if (null !== $this->analysisResults && \is_array($this->analysisResults)) {
                $n = 0;
                foreach ($this->analysisResults as $item) {
                    $res['AnalysisResults'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return AnalyzeGitRepositoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnalysisResults'])) {
            if (!empty($map['AnalysisResults'])) {
                $model->analysisResults = [];
                $n = 0;
                foreach ($map['AnalysisResults'] as $item) {
                    $model->analysisResults[$n++] = null !== $item ? analysisResults::fromMap($item) : $item;
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
