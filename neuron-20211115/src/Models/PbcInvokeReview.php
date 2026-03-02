<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcInvokeReview extends Model
{
    /**
     * @var string
     */
    public $applicant;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $invokeId;

    /**
     * @var int
     */
    public $invokePbcId;

    /**
     * @var string
     */
    public $invokePbcName;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $reviewer;

    /**
     * @var string
     */
    public $reviewerId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'applicant' => 'applicant',
        'gmtCreate' => 'gmtCreate',
        'id' => 'id',
        'invokeId' => 'invokeId',
        'invokePbcId' => 'invokePbcId',
        'invokePbcName' => 'invokePbcName',
        'pbcId' => 'pbcId',
        'pbcName' => 'pbcName',
        'requestId' => 'requestId',
        'reviewer' => 'reviewer',
        'reviewerId' => 'reviewerId',
        'status' => 'status',
        'usage' => 'usage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicant) {
            $res['applicant'] = $this->applicant;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->invokeId) {
            $res['invokeId'] = $this->invokeId;
        }

        if (null !== $this->invokePbcId) {
            $res['invokePbcId'] = $this->invokePbcId;
        }

        if (null !== $this->invokePbcName) {
            $res['invokePbcName'] = $this->invokePbcName;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->reviewer) {
            $res['reviewer'] = $this->reviewer;
        }

        if (null !== $this->reviewerId) {
            $res['reviewerId'] = $this->reviewerId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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
        if (isset($map['applicant'])) {
            $model->applicant = $map['applicant'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['invokeId'])) {
            $model->invokeId = $map['invokeId'];
        }

        if (isset($map['invokePbcId'])) {
            $model->invokePbcId = $map['invokePbcId'];
        }

        if (isset($map['invokePbcName'])) {
            $model->invokePbcName = $map['invokePbcName'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['reviewer'])) {
            $model->reviewer = $map['reviewer'];
        }

        if (isset($map['reviewerId'])) {
            $model->reviewerId = $map['reviewerId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
