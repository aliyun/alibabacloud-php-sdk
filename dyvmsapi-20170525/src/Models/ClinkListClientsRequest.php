<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkListClientsRequest extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var string
     */
    public $clid;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $qno;

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
    public $startTime;

    /**
     * @var int
     */
    public $updateEndTime;

    /**
     * @var int
     */
    public $updateStartTime;
    protected $_name = [
        'active' => 'Active',
        'bindTel' => 'BindTel',
        'clid' => 'Clid',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'limit' => 'Limit',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'qno' => 'Qno',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'updateEndTime' => 'UpdateEndTime',
        'updateStartTime' => 'UpdateStartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->clid) {
            $res['Clid'] = $this->clid;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->qno) {
            $res['Qno'] = $this->qno;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->updateEndTime) {
            $res['UpdateEndTime'] = $this->updateEndTime;
        }

        if (null !== $this->updateStartTime) {
            $res['UpdateStartTime'] = $this->updateStartTime;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['Clid'])) {
            $model->clid = $map['Clid'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Qno'])) {
            $model->qno = $map['Qno'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UpdateEndTime'])) {
            $model->updateEndTime = $map['UpdateEndTime'];
        }

        if (isset($map['UpdateStartTime'])) {
            $model->updateStartTime = $map['UpdateStartTime'];
        }

        return $model;
    }
}
