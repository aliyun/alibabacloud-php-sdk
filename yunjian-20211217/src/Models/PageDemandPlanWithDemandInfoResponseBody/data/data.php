<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\PageDemandPlanWithDemandInfoResponseBody\data;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $approvalNodeStatus;

    /**
     * @var string
     */
    public $approvalStatus;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $deliveryPlanId;

    /**
     * @var string
     */
    public $deliveryStatus;

    /**
     * @var string
     */
    public $demandDesc;

    /**
     * @var int
     */
    public $demandId;

    /**
     * @var string
     */
    public $demandName;

    /**
     * @var float
     */
    public $demandPlanId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var string
     */
    public $requirementObjectCode;

    /**
     * @var int
     */
    public $uid;
    protected $_name = [
        'accountId' => 'accountId',
        'accountName' => 'accountName',
        'approvalNodeStatus' => 'approvalNodeStatus',
        'approvalStatus' => 'approvalStatus',
        'creator' => 'creator',
        'deliveryPlanId' => 'deliveryPlanId',
        'deliveryStatus' => 'deliveryStatus',
        'demandDesc' => 'demandDesc',
        'demandId' => 'demandId',
        'demandName' => 'demandName',
        'demandPlanId' => 'demandPlanId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'modifier' => 'modifier',
        'requirementObjectCode' => 'requirementObjectCode',
        'uid' => 'uid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }
        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }
        if (null !== $this->approvalNodeStatus) {
            $res['approvalNodeStatus'] = $this->approvalNodeStatus;
        }
        if (null !== $this->approvalStatus) {
            $res['approvalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->deliveryPlanId) {
            $res['deliveryPlanId'] = $this->deliveryPlanId;
        }
        if (null !== $this->deliveryStatus) {
            $res['deliveryStatus'] = $this->deliveryStatus;
        }
        if (null !== $this->demandDesc) {
            $res['demandDesc'] = $this->demandDesc;
        }
        if (null !== $this->demandId) {
            $res['demandId'] = $this->demandId;
        }
        if (null !== $this->demandName) {
            $res['demandName'] = $this->demandName;
        }
        if (null !== $this->demandPlanId) {
            $res['demandPlanId'] = $this->demandPlanId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->requirementObjectCode) {
            $res['requirementObjectCode'] = $this->requirementObjectCode;
        }
        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }
        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }
        if (isset($map['approvalNodeStatus'])) {
            $model->approvalNodeStatus = $map['approvalNodeStatus'];
        }
        if (isset($map['approvalStatus'])) {
            $model->approvalStatus = $map['approvalStatus'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['deliveryPlanId'])) {
            $model->deliveryPlanId = $map['deliveryPlanId'];
        }
        if (isset($map['deliveryStatus'])) {
            $model->deliveryStatus = $map['deliveryStatus'];
        }
        if (isset($map['demandDesc'])) {
            $model->demandDesc = $map['demandDesc'];
        }
        if (isset($map['demandId'])) {
            $model->demandId = $map['demandId'];
        }
        if (isset($map['demandName'])) {
            $model->demandName = $map['demandName'];
        }
        if (isset($map['demandPlanId'])) {
            $model->demandPlanId = $map['demandPlanId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['requirementObjectCode'])) {
            $model->requirementObjectCode = $map['requirementObjectCode'];
        }
        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
