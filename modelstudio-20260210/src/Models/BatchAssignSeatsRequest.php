<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class BatchAssignSeatsRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;

    /**
     * @var string
     */
    public $accountIdsStr;

    /**
     * @var string
     */
    public $callerUacAccountId;

    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $namespaceId;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'accountIdsStr' => 'AccountIdsStr',
        'callerUacAccountId' => 'CallerUacAccountId',
        'locale' => 'Locale',
        'namespaceId' => 'NamespaceId',
        'seatType' => 'SeatType',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1 = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->accountIdsStr) {
            $res['AccountIdsStr'] = $this->accountIdsStr;
        }

        if (null !== $this->callerUacAccountId) {
            $res['CallerUacAccountId'] = $this->callerUacAccountId;
        }

        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }

        if (null !== $this->namespaceId) {
            $res['NamespaceId'] = $this->namespaceId;
        }

        if (null !== $this->seatType) {
            $res['SeatType'] = $this->seatType;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1 = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AccountIdsStr'])) {
            $model->accountIdsStr = $map['AccountIdsStr'];
        }

        if (isset($map['CallerUacAccountId'])) {
            $model->callerUacAccountId = $map['CallerUacAccountId'];
        }

        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        if (isset($map['NamespaceId'])) {
            $model->namespaceId = $map['NamespaceId'];
        }

        if (isset($map['SeatType'])) {
            $model->seatType = $map['SeatType'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
