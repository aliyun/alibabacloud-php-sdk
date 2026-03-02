<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcVersion extends Model
{
    /**
     * @var int
     */
    public $companyId;

    /**
     * @var string
     */
    public $companyName;

    /**
     * @var int
     */
    public $developerId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isWatched;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $reviewId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $stepStatus;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $visibilityLevel;
    protected $_name = [
        'companyId' => 'companyId',
        'companyName' => 'companyName',
        'developerId' => 'developerId',
        'id' => 'id',
        'isWatched' => 'isWatched',
        'name' => 'name',
        'pbcId' => 'pbcId',
        'requestId' => 'requestId',
        'reviewId' => 'reviewId',
        'status' => 'status',
        'stepStatus' => 'stepStatus',
        'version' => 'version',
        'visibilityLevel' => 'visibilityLevel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->companyName) {
            $res['companyName'] = $this->companyName;
        }

        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isWatched) {
            $res['isWatched'] = $this->isWatched;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->reviewId) {
            $res['reviewId'] = $this->reviewId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->stepStatus) {
            $res['stepStatus'] = $this->stepStatus;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->visibilityLevel) {
            $res['visibilityLevel'] = $this->visibilityLevel;
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
        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['companyName'])) {
            $model->companyName = $map['companyName'];
        }

        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isWatched'])) {
            $model->isWatched = $map['isWatched'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['reviewId'])) {
            $model->reviewId = $map['reviewId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['stepStatus'])) {
            $model->stepStatus = $map['stepStatus'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['visibilityLevel'])) {
            $model->visibilityLevel = $map['visibilityLevel'];
        }

        return $model;
    }
}
