<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListResponseBody\data;

use AlibabaCloud\Dara\Model;

class records extends Model
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
    public $accountType;

    /**
     * @var string
     */
    public $approvalUrl;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var string
     */
    public $description;

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
    public $modifierName;

    /**
     * @var int
     */
    public $planId;

    /**
     * @var string
     */
    public $planName;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'accountId' => 'accountId',
        'accountName' => 'accountName',
        'accountType' => 'accountType',
        'approvalUrl' => 'approvalUrl',
        'creator' => 'creator',
        'creatorName' => 'creatorName',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'modifier' => 'modifier',
        'modifierName' => 'modifierName',
        'planId' => 'planId',
        'planName' => 'planName',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['accountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['accountName'] = $this->accountName;
        }

        if (null !== $this->accountType) {
            $res['accountType'] = $this->accountType;
        }

        if (null !== $this->approvalUrl) {
            $res['approvalUrl'] = $this->approvalUrl;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->creatorName) {
            $res['creatorName'] = $this->creatorName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->modifierName) {
            $res['modifierName'] = $this->modifierName;
        }

        if (null !== $this->planId) {
            $res['planId'] = $this->planId;
        }

        if (null !== $this->planName) {
            $res['planName'] = $this->planName;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['accountId'])) {
            $model->accountId = $map['accountId'];
        }

        if (isset($map['accountName'])) {
            $model->accountName = $map['accountName'];
        }

        if (isset($map['accountType'])) {
            $model->accountType = $map['accountType'];
        }

        if (isset($map['approvalUrl'])) {
            $model->approvalUrl = $map['approvalUrl'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['creatorName'])) {
            $model->creatorName = $map['creatorName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['modifierName'])) {
            $model->modifierName = $map['modifierName'];
        }

        if (isset($map['planId'])) {
            $model->planId = $map['planId'];
        }

        if (isset($map['planName'])) {
            $model->planName = $map['planName'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
