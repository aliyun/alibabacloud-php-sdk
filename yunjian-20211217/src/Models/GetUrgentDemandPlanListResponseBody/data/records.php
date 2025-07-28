<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yunjian\V20211217\Models\GetUrgentDemandPlanListResponseBody\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @example 1705524002740212
     *
     * @var string
     */
    public $accountId;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $accountName;

    /**
     * @example ALIYUN
     *
     * @var string
     */
    public $accountType;

    /**
     * @example https://xxx
     *
     * @var string
     */
    public $approvalUrl;

    /**
     * @example 1111
     *
     * @var string
     */
    public $creator;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $creatorName;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $description;

    /**
     * @example 2021-12-20 10:29:50
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2021-12-20 10:29:50
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $modifier;

    /**
     * @example xxxx
     *
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

    /**
     * @param array $map
     *
     * @return records
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
