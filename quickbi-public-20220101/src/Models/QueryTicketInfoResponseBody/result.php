<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\QueryTicketInfoResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $accessTicket;

    /**
     * @var string
     */
    public $cmptId;

    /**
     * @var string
     */
    public $globalParam;

    /**
     * @var string
     */
    public $invalidTime;

    /**
     * @var int
     */
    public $maxTicketNum;

    /**
     * @var string
     */
    public $organizationId;

    /**
     * @var string
     */
    public $registerTime;

    /**
     * @var int
     */
    public $usedTicketNum;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $watermarkParam;

    /**
     * @var string
     */
    public $worksId;
    protected $_name = [
        'accessTicket'   => 'AccessTicket',
        'cmptId'         => 'CmptId',
        'globalParam'    => 'GlobalParam',
        'invalidTime'    => 'InvalidTime',
        'maxTicketNum'   => 'MaxTicketNum',
        'organizationId' => 'OrganizationId',
        'registerTime'   => 'RegisterTime',
        'usedTicketNum'  => 'UsedTicketNum',
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
        if (null !== $this->accessTicket) {
            $res['AccessTicket'] = $this->accessTicket;
        }
        if (null !== $this->cmptId) {
            $res['CmptId'] = $this->cmptId;
        }
        if (null !== $this->globalParam) {
            $res['GlobalParam'] = $this->globalParam;
        }
        if (null !== $this->invalidTime) {
            $res['InvalidTime'] = $this->invalidTime;
        }
        if (null !== $this->maxTicketNum) {
            $res['MaxTicketNum'] = $this->maxTicketNum;
        }
        if (null !== $this->organizationId) {
            $res['OrganizationId'] = $this->organizationId;
        }
        if (null !== $this->registerTime) {
            $res['RegisterTime'] = $this->registerTime;
        }
        if (null !== $this->usedTicketNum) {
            $res['UsedTicketNum'] = $this->usedTicketNum;
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
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessTicket'])) {
            $model->accessTicket = $map['AccessTicket'];
        }
        if (isset($map['CmptId'])) {
            $model->cmptId = $map['CmptId'];
        }
        if (isset($map['GlobalParam'])) {
            $model->globalParam = $map['GlobalParam'];
        }
        if (isset($map['InvalidTime'])) {
            $model->invalidTime = $map['InvalidTime'];
        }
        if (isset($map['MaxTicketNum'])) {
            $model->maxTicketNum = $map['MaxTicketNum'];
        }
        if (isset($map['OrganizationId'])) {
            $model->organizationId = $map['OrganizationId'];
        }
        if (isset($map['RegisterTime'])) {
            $model->registerTime = $map['RegisterTime'];
        }
        if (isset($map['UsedTicketNum'])) {
            $model->usedTicketNum = $map['UsedTicketNum'];
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
