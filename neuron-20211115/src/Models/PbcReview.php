<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcReview extends Model
{
    /**
     * @var int
     */
    public $developerId;

    /**
     * @var string
     */
    public $developerName;

    /**
     * @var string
     */
    public $feedbackPbcApi;

    /**
     * @var string
     */
    public $feedbackPbcInstruction;

    /**
     * @var string
     */
    public $feedbackPbcSchema;

    /**
     * @var string
     */
    public $feedbackSecurity;

    /**
     * @var string
     */
    public $feedbackServiceAvailable;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $marketName;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var string
     */
    public $pbcUrl;

    /**
     * @var string
     */
    public $pbcVersion;

    /**
     * @var string
     */
    public $remainTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $reviewerId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'developerId' => 'developerId',
        'developerName' => 'developerName',
        'feedbackPbcApi' => 'feedbackPbcApi',
        'feedbackPbcInstruction' => 'feedbackPbcInstruction',
        'feedbackPbcSchema' => 'feedbackPbcSchema',
        'feedbackSecurity' => 'feedbackSecurity',
        'feedbackServiceAvailable' => 'feedbackServiceAvailable',
        'id' => 'id',
        'marketId' => 'marketId',
        'marketName' => 'marketName',
        'pbcName' => 'pbcName',
        'pbcUrl' => 'pbcUrl',
        'pbcVersion' => 'pbcVersion',
        'remainTime' => 'remainTime',
        'requestId' => 'requestId',
        'reviewerId' => 'reviewerId',
        'status' => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->developerName) {
            $res['developerName'] = $this->developerName;
        }

        if (null !== $this->feedbackPbcApi) {
            $res['feedbackPbcApi'] = $this->feedbackPbcApi;
        }

        if (null !== $this->feedbackPbcInstruction) {
            $res['feedbackPbcInstruction'] = $this->feedbackPbcInstruction;
        }

        if (null !== $this->feedbackPbcSchema) {
            $res['feedbackPbcSchema'] = $this->feedbackPbcSchema;
        }

        if (null !== $this->feedbackSecurity) {
            $res['feedbackSecurity'] = $this->feedbackSecurity;
        }

        if (null !== $this->feedbackServiceAvailable) {
            $res['feedbackServiceAvailable'] = $this->feedbackServiceAvailable;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->marketName) {
            $res['marketName'] = $this->marketName;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->pbcUrl) {
            $res['pbcUrl'] = $this->pbcUrl;
        }

        if (null !== $this->pbcVersion) {
            $res['pbcVersion'] = $this->pbcVersion;
        }

        if (null !== $this->remainTime) {
            $res['remainTime'] = $this->remainTime;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->reviewerId) {
            $res['reviewerId'] = $this->reviewerId;
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
        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['developerName'])) {
            $model->developerName = $map['developerName'];
        }

        if (isset($map['feedbackPbcApi'])) {
            $model->feedbackPbcApi = $map['feedbackPbcApi'];
        }

        if (isset($map['feedbackPbcInstruction'])) {
            $model->feedbackPbcInstruction = $map['feedbackPbcInstruction'];
        }

        if (isset($map['feedbackPbcSchema'])) {
            $model->feedbackPbcSchema = $map['feedbackPbcSchema'];
        }

        if (isset($map['feedbackSecurity'])) {
            $model->feedbackSecurity = $map['feedbackSecurity'];
        }

        if (isset($map['feedbackServiceAvailable'])) {
            $model->feedbackServiceAvailable = $map['feedbackServiceAvailable'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['marketName'])) {
            $model->marketName = $map['marketName'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['pbcUrl'])) {
            $model->pbcUrl = $map['pbcUrl'];
        }

        if (isset($map['pbcVersion'])) {
            $model->pbcVersion = $map['pbcVersion'];
        }

        if (isset($map['remainTime'])) {
            $model->remainTime = $map['remainTime'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['reviewerId'])) {
            $model->reviewerId = $map['reviewerId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
