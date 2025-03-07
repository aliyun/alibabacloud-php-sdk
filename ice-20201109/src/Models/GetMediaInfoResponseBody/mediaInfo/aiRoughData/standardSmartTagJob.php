<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughData;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo\aiRoughData\standardSmartTagJob\results;
use AlibabaCloud\Tea\Model;

class standardSmartTagJob extends Model
{
    /**
     * @description The ID of the AI task.
     *
     * @example ****483915d4f2cd8ac20b48fb04****
     *
     * @var string
     */
    public $aiJobId;

    /**
     * @description The URL of the tagging result.
     *
     * @example http://xx.oss-cn-shanghai.aliyuncs.com/result2.txt
     *
     * @var string
     */
    public $resultUrl;

    /**
     * @description The recognized tags.
     *
     * @var results[]
     */
    public $results;

    /**
     * @description The analysis status. Valid values:
     *
     *   Analyzing
     *   AnalyzeSuccess
     *   AnalyzeFailed
     *
     * @example Analyzing
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'aiJobId'   => 'AiJobId',
        'resultUrl' => 'ResultUrl',
        'results'   => 'Results',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aiJobId) {
            $res['AiJobId'] = $this->aiJobId;
        }
        if (null !== $this->resultUrl) {
            $res['ResultUrl'] = $this->resultUrl;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return standardSmartTagJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AiJobId'])) {
            $model->aiJobId = $map['AiJobId'];
        }
        if (isset($map['ResultUrl'])) {
            $model->resultUrl = $map['ResultUrl'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
