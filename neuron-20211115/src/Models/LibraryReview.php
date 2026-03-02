<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class LibraryReview extends Model
{
    /**
     * @var string
     */
    public $applicant;

    /**
     * @var string
     */
    public $artificatId;

    /**
     * @var string
     */
    public $developerName;

    /**
     * @var string
     */
    public $feedbackLibraryInstruction;

    /**
     * @var string
     */
    public $feedbackLibrarySchema;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $libraryName;

    /**
     * @var string
     */
    public $libraryUrl;

    /**
     * @var string
     */
    public $marketId;

    /**
     * @var string
     */
    public $marketName;

    /**
     * @var string
     */
    public $remainTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $reviewerId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicant' => 'applicant',
        'artificatId' => 'artificatId',
        'developerName' => 'developerName',
        'feedbackLibraryInstruction' => 'feedbackLibraryInstruction',
        'feedbackLibrarySchema' => 'feedbackLibrarySchema',
        'gmtCreate' => 'gmtCreate',
        'groupId' => 'groupId',
        'id' => 'id',
        'libraryName' => 'libraryName',
        'libraryUrl' => 'libraryUrl',
        'marketId' => 'marketId',
        'marketName' => 'marketName',
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
        if (null !== $this->applicant) {
            $res['applicant'] = $this->applicant;
        }

        if (null !== $this->artificatId) {
            $res['artificatId'] = $this->artificatId;
        }

        if (null !== $this->developerName) {
            $res['developerName'] = $this->developerName;
        }

        if (null !== $this->feedbackLibraryInstruction) {
            $res['feedbackLibraryInstruction'] = $this->feedbackLibraryInstruction;
        }

        if (null !== $this->feedbackLibrarySchema) {
            $res['feedbackLibrarySchema'] = $this->feedbackLibrarySchema;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->libraryName) {
            $res['libraryName'] = $this->libraryName;
        }

        if (null !== $this->libraryUrl) {
            $res['libraryUrl'] = $this->libraryUrl;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->marketName) {
            $res['marketName'] = $this->marketName;
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
        if (isset($map['applicant'])) {
            $model->applicant = $map['applicant'];
        }

        if (isset($map['artificatId'])) {
            $model->artificatId = $map['artificatId'];
        }

        if (isset($map['developerName'])) {
            $model->developerName = $map['developerName'];
        }

        if (isset($map['feedbackLibraryInstruction'])) {
            $model->feedbackLibraryInstruction = $map['feedbackLibraryInstruction'];
        }

        if (isset($map['feedbackLibrarySchema'])) {
            $model->feedbackLibrarySchema = $map['feedbackLibrarySchema'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['libraryName'])) {
            $model->libraryName = $map['libraryName'];
        }

        if (isset($map['libraryUrl'])) {
            $model->libraryUrl = $map['libraryUrl'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['marketName'])) {
            $model->marketName = $map['marketName'];
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
