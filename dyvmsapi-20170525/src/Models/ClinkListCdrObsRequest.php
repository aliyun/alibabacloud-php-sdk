<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class ClinkListCdrObsRequest extends Model
{
    /**
     * @var int
     */
    public $associatedId;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $clientNumber;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $customerNumber;

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
    public $evaluation;

    /**
     * @var int
     */
    public $hiddenType;

    /**
     * @var string
     */
    public $hotline;

    /**
     * @var int
     */
    public $idType;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $mainUniqueId;

    /**
     * @var int
     */
    public $mark;

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
    public $province;

    /**
     * @var int
     */
    public $queueAnswerInTime;

    /**
     * @var string
     */
    public $requestUniqueId;

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
    public $status;
    protected $_name = [
        'associatedId' => 'AssociatedId',
        'city' => 'City',
        'clientNumber' => 'ClientNumber',
        'cno' => 'Cno',
        'customerNumber' => 'CustomerNumber',
        'endTime' => 'EndTime',
        'enterpriseId' => 'EnterpriseId',
        'evaluation' => 'Evaluation',
        'hiddenType' => 'HiddenType',
        'hotline' => 'Hotline',
        'idType' => 'IdType',
        'limit' => 'Limit',
        'mainUniqueId' => 'MainUniqueId',
        'mark' => 'Mark',
        'offset' => 'Offset',
        'ownerId' => 'OwnerId',
        'province' => 'Province',
        'queueAnswerInTime' => 'QueueAnswerInTime',
        'requestUniqueId' => 'RequestUniqueId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associatedId) {
            $res['AssociatedId'] = $this->associatedId;
        }

        if (null !== $this->city) {
            $res['City'] = $this->city;
        }

        if (null !== $this->clientNumber) {
            $res['ClientNumber'] = $this->clientNumber;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->customerNumber) {
            $res['CustomerNumber'] = $this->customerNumber;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->evaluation) {
            $res['Evaluation'] = $this->evaluation;
        }

        if (null !== $this->hiddenType) {
            $res['HiddenType'] = $this->hiddenType;
        }

        if (null !== $this->hotline) {
            $res['Hotline'] = $this->hotline;
        }

        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->mainUniqueId) {
            $res['MainUniqueId'] = $this->mainUniqueId;
        }

        if (null !== $this->mark) {
            $res['Mark'] = $this->mark;
        }

        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }

        if (null !== $this->queueAnswerInTime) {
            $res['QueueAnswerInTime'] = $this->queueAnswerInTime;
        }

        if (null !== $this->requestUniqueId) {
            $res['RequestUniqueId'] = $this->requestUniqueId;
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

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AssociatedId'])) {
            $model->associatedId = $map['AssociatedId'];
        }

        if (isset($map['City'])) {
            $model->city = $map['City'];
        }

        if (isset($map['ClientNumber'])) {
            $model->clientNumber = $map['ClientNumber'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CustomerNumber'])) {
            $model->customerNumber = $map['CustomerNumber'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['Evaluation'])) {
            $model->evaluation = $map['Evaluation'];
        }

        if (isset($map['HiddenType'])) {
            $model->hiddenType = $map['HiddenType'];
        }

        if (isset($map['Hotline'])) {
            $model->hotline = $map['Hotline'];
        }

        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['MainUniqueId'])) {
            $model->mainUniqueId = $map['MainUniqueId'];
        }

        if (isset($map['Mark'])) {
            $model->mark = $map['Mark'];
        }

        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }

        if (isset($map['QueueAnswerInTime'])) {
            $model->queueAnswerInTime = $map['QueueAnswerInTime'];
        }

        if (isset($map['RequestUniqueId'])) {
            $model->requestUniqueId = $map['RequestUniqueId'];
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

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
