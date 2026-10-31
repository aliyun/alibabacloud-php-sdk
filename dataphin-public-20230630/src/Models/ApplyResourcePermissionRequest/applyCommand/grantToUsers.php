<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyResourcePermissionRequest\applyCommand;

use AlibabaCloud\Dara\Model;

class grantToUsers extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $periodEnd;

    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'accountType' => 'AccountType',
        'periodEnd' => 'PeriodEnd',
        'periodType' => 'PeriodType',
        'projectId' => 'ProjectId',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }

        if (null !== $this->periodEnd) {
            $res['PeriodEnd'] = $this->periodEnd;
        }

        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }

        if (isset($map['PeriodEnd'])) {
            $model->periodEnd = $map['PeriodEnd'];
        }

        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
