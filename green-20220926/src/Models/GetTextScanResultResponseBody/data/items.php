<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultResponseBody\data\items\result;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $content;

    /**
     * @example miss
     *
     * @var string
     */
    public $extFeedback;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $extra;

    /**
     * @example 2023-07-11 14:21:36
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example nonLabel
     *
     * @var string
     */
    public $labels;

    /**
     * @example AAAAAA-BBBB-CCCCC-DDDD-EEEEEEEE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2023-07-11 14:21:36
     *
     * @var string
     */
    public $requestTime;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @example {}
     *
     * @var string
     */
    public $scanResult;

    /**
     * @example 20
     *
     * @var float
     */
    public $score;

    /**
     * @example nickname_detection
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example review
     *
     * @var string
     */
    public $suggestion;

    /**
     * @example txtwkgb******AsYNXoJswy-1Aa1Qk
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'content'     => 'Content',
        'extFeedback' => 'ExtFeedback',
        'extra'       => 'Extra',
        'gmtCreate'   => 'GmtCreate',
        'labels'      => 'Labels',
        'requestId'   => 'RequestId',
        'requestTime' => 'RequestTime',
        'result'      => 'Result',
        'scanResult'  => 'ScanResult',
        'score'       => 'Score',
        'serviceCode' => 'ServiceCode',
        'suggestion'  => 'Suggestion',
        'taskId'      => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extFeedback) {
            $res['ExtFeedback'] = $this->extFeedback;
        }
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->requestTime) {
            $res['RequestTime'] = $this->requestTime;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->scanResult) {
            $res['ScanResult'] = $this->scanResult;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ExtFeedback'])) {
            $model->extFeedback = $map['ExtFeedback'];
        }
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RequestTime'])) {
            $model->requestTime = $map['RequestTime'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ScanResult'])) {
            $model->scanResult = $map['ScanResult'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
