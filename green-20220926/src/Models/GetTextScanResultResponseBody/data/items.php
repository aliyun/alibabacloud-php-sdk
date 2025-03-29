<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220926\Models\GetTextScanResultResponseBody\data\items\result;

class items extends Model
{
    /**
     * @var string
     */
    public $bailianRequestId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $extFeedback;

    /**
     * @var mixed[]
     */
    public $extra;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $requestTime;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $scanResult;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var string
     */
    public $suggestion;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'bailianRequestId' => 'BailianRequestId',
        'content' => 'Content',
        'extFeedback' => 'ExtFeedback',
        'extra' => 'Extra',
        'gmtCreate' => 'GmtCreate',
        'labels' => 'Labels',
        'requestId' => 'RequestId',
        'requestTime' => 'RequestTime',
        'result' => 'Result',
        'riskLevel' => 'RiskLevel',
        'scanResult' => 'ScanResult',
        'score' => 'Score',
        'serviceCode' => 'ServiceCode',
        'suggestion' => 'Suggestion',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->extra)) {
            Model::validateArray($this->extra);
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bailianRequestId) {
            $res['BailianRequestId'] = $this->bailianRequestId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->extFeedback) {
            $res['ExtFeedback'] = $this->extFeedback;
        }

        if (null !== $this->extra) {
            if (\is_array($this->extra)) {
                $res['Extra'] = [];
                foreach ($this->extra as $key1 => $value1) {
                    $res['Extra'][$key1] = $value1;
                }
            }
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
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BailianRequestId'])) {
            $model->bailianRequestId = $map['BailianRequestId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['ExtFeedback'])) {
            $model->extFeedback = $map['ExtFeedback'];
        }

        if (isset($map['Extra'])) {
            if (!empty($map['Extra'])) {
                $model->extra = [];
                foreach ($map['Extra'] as $key1 => $value1) {
                    $model->extra[$key1] = $value1;
                }
            }
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
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
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
