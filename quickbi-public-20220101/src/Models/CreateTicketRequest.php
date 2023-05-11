<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateTicketRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @example 1
     *
     * @var int
     */
    public $accountType;

    /**
     * @example 0fc6a275c7f64f17b1****a306ce0f31
     *
     * @var string
     */
    public $cmptId;

    /**
     * @example 200
     *
     * @var int
     */
    public $expireTime;

    /**
     * @example [{"paramKey":"price","joinType":"and","conditionList":[{"operate":">","value":"0"}]}]
     *
     * @var string
     */
    public $globalParam;

    /**
     * @example 1
     *
     * @var int
     */
    public $ticketNum;

    /**
     * @example 46e537466****92704c8
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $watermarkParam;

    /**
     * @example a206f5f3-****-e9b17c835b03
     *
     * @var string
     */
    public $worksId;
    protected $_name = [
        'accountName'    => 'AccountName',
        'accountType'    => 'AccountType',
        'cmptId'         => 'CmptId',
        'expireTime'     => 'ExpireTime',
        'globalParam'    => 'GlobalParam',
        'ticketNum'      => 'TicketNum',
        'userId'         => 'UserId',
        'watermarkParam' => 'WatermarkParam',
        'worksId'        => 'WorksId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->cmptId) {
            $res['CmptId'] = $this->cmptId;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->globalParam) {
            $res['GlobalParam'] = $this->globalParam;
        }
        if (null !== $this->ticketNum) {
            $res['TicketNum'] = $this->ticketNum;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->watermarkParam) {
            $res['WatermarkParam'] = $this->watermarkParam;
        }
        if (null !== $this->worksId) {
            $res['WorksId'] = $this->worksId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTicketRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['CmptId'])) {
            $model->cmptId = $map['CmptId'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['GlobalParam'])) {
            $model->globalParam = $map['GlobalParam'];
        }
        if (isset($map['TicketNum'])) {
            $model->ticketNum = $map['TicketNum'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WatermarkParam'])) {
            $model->watermarkParam = $map['WatermarkParam'];
        }
        if (isset($map['WorksId'])) {
            $model->worksId = $map['WorksId'];
        }

        return $model;
    }
}
