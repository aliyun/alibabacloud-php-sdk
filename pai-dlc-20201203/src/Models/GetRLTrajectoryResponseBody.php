<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidlc\V20201203\Models;

use AlibabaCloud\Dara\Model;

class GetRLTrajectoryResponseBody extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $promptUid;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sampleIndex;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var mixed[][]
     */
    public $turns;
    protected $_name = [
        'jobId' => 'JobId',
        'promptUid' => 'PromptUid',
        'requestId' => 'RequestId',
        'sampleIndex' => 'SampleIndex',
        'totalCount' => 'TotalCount',
        'turns' => 'Turns',
    ];

    public function validate()
    {
        if (\is_array($this->turns)) {
            Model::validateArray($this->turns);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->promptUid) {
            $res['PromptUid'] = $this->promptUid;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sampleIndex) {
            $res['SampleIndex'] = $this->sampleIndex;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->turns) {
            if (\is_array($this->turns)) {
                $res['Turns'] = [];
                $n1 = 0;
                foreach ($this->turns as $item1) {
                    if (\is_array($item1)) {
                        $res['Turns'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Turns'][$n1][$key2] = $value2;
                        }
                    }
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['PromptUid'])) {
            $model->promptUid = $map['PromptUid'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SampleIndex'])) {
            $model->sampleIndex = $map['SampleIndex'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['Turns'])) {
            if (!empty($map['Turns'])) {
                $model->turns = [];
                $n1 = 0;
                foreach ($map['Turns'] as $item1) {
                    if (!empty($item1)) {
                        $model->turns[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->turns[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
