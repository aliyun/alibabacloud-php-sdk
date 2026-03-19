<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hbr\V20170908\Models\GetBasicStatisticsResponseBody\globalStatistics;
use AlibabaCloud\SDK\Hbr\V20170908\Models\GetBasicStatisticsResponseBody\regionStatistics;

class GetBasicStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var globalStatistics
     */
    public $globalStatistics;

    /**
     * @var string
     */
    public $message;

    /**
     * @var regionStatistics[]
     */
    public $regionStatistics;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'globalStatistics' => 'GlobalStatistics',
        'message' => 'Message',
        'regionStatistics' => 'RegionStatistics',
        'requestId' => 'RequestId',
        'sourceType' => 'SourceType',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->globalStatistics) {
            $this->globalStatistics->validate();
        }
        if (\is_array($this->regionStatistics)) {
            Model::validateArray($this->regionStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->globalStatistics) {
            $res['GlobalStatistics'] = null !== $this->globalStatistics ? $this->globalStatistics->toArray($noStream) : $this->globalStatistics;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->regionStatistics) {
            if (\is_array($this->regionStatistics)) {
                $res['RegionStatistics'] = [];
                $n1 = 0;
                foreach ($this->regionStatistics as $item1) {
                    $res['RegionStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['GlobalStatistics'])) {
            $model->globalStatistics = globalStatistics::fromMap($map['GlobalStatistics']);
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RegionStatistics'])) {
            if (!empty($map['RegionStatistics'])) {
                $model->regionStatistics = [];
                $n1 = 0;
                foreach ($map['RegionStatistics'] as $item1) {
                    $model->regionStatistics[$n1] = regionStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
