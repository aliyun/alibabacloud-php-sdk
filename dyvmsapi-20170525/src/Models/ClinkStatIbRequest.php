<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkStatIbRequest extends Model
{
    /**
     * @var string
     */
    public $date;

    /**
     * @var string
     */
    public $dateEnd;

    /**
     * @var int
     */
    public $endHour;

    /**
     * @var int
     */
    public $endMinute;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $fields;

    /**
     * @var string
     */
    public $hotlines;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $startHour;

    /**
     * @var int
     */
    public $startMinute;

    /**
     * @var int
     */
    public $statisticMethod;
    protected $_name = [
        'date' => 'Date',
        'dateEnd' => 'DateEnd',
        'endHour' => 'EndHour',
        'endMinute' => 'EndMinute',
        'enterpriseId' => 'EnterpriseId',
        'fields' => 'Fields',
        'hotlines' => 'Hotlines',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startHour' => 'StartHour',
        'startMinute' => 'StartMinute',
        'statisticMethod' => 'StatisticMethod',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }

        if (null !== $this->dateEnd) {
            $res['DateEnd'] = $this->dateEnd;
        }

        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }

        if (null !== $this->endMinute) {
            $res['EndMinute'] = $this->endMinute;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }

        if (null !== $this->hotlines) {
            $res['Hotlines'] = $this->hotlines;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }

        if (null !== $this->startMinute) {
            $res['StartMinute'] = $this->startMinute;
        }

        if (null !== $this->statisticMethod) {
            $res['StatisticMethod'] = $this->statisticMethod;
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
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }

        if (isset($map['DateEnd'])) {
            $model->dateEnd = $map['DateEnd'];
        }

        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }

        if (isset($map['EndMinute'])) {
            $model->endMinute = $map['EndMinute'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }

        if (isset($map['Hotlines'])) {
            $model->hotlines = $map['Hotlines'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        if (isset($map['StartMinute'])) {
            $model->startMinute = $map['StartMinute'];
        }

        if (isset($map['StatisticMethod'])) {
            $model->statisticMethod = $map['StatisticMethod'];
        }

        return $model;
    }
}
