<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeScanTaskStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $dealedRiskNum;
    /**
     * @var int
     */
    public $personalTaskNum;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalTaskNum;
    /**
     * @var int
     */
    public $userNum;
    protected $_name = [
        'dealedRiskNum'   => 'DealedRiskNum',
        'personalTaskNum' => 'PersonalTaskNum',
        'requestId'       => 'RequestId',
        'totalTaskNum'    => 'TotalTaskNum',
        'userNum'         => 'UserNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dealedRiskNum) {
            $res['DealedRiskNum'] = $this->dealedRiskNum;
        }

        if (null !== $this->personalTaskNum) {
            $res['PersonalTaskNum'] = $this->personalTaskNum;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalTaskNum) {
            $res['TotalTaskNum'] = $this->totalTaskNum;
        }

        if (null !== $this->userNum) {
            $res['UserNum'] = $this->userNum;
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
        if (isset($map['DealedRiskNum'])) {
            $model->dealedRiskNum = $map['DealedRiskNum'];
        }

        if (isset($map['PersonalTaskNum'])) {
            $model->personalTaskNum = $map['PersonalTaskNum'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalTaskNum'])) {
            $model->totalTaskNum = $map['TotalTaskNum'];
        }

        if (isset($map['UserNum'])) {
            $model->userNum = $map['UserNum'];
        }

        return $model;
    }
}
