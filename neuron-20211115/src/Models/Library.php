<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class Library extends Model
{
    /**
     * @var string
     */
    public $artifactId;

    /**
     * @var string
     */
    public $assetType;

    /**
     * @var string
     */
    public $company;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $dependCount;

    /**
     * @var string
     */
    public $description;

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
    public $industry;

    /**
     * @var bool
     */
    public $isWatched;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $repoUrl;

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
     * @var int
     */
    public $watchCount;
    protected $_name = [
        'artifactId' => 'artifactId',
        'assetType' => 'assetType',
        'company' => 'company',
        'companyId' => 'companyId',
        'dependCount' => 'dependCount',
        'description' => 'description',
        'groupId' => 'groupId',
        'id' => 'id',
        'industry' => 'industry',
        'isWatched' => 'isWatched',
        'name' => 'name',
        'provider' => 'provider',
        'providerName' => 'providerName',
        'repoUrl' => 'repoUrl',
        'requestId' => 'requestId',
        'reviewId' => 'reviewId',
        'status' => 'status',
        'stepStatus' => 'stepStatus',
        'watchCount' => 'watchCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifactId) {
            $res['artifactId'] = $this->artifactId;
        }

        if (null !== $this->assetType) {
            $res['assetType'] = $this->assetType;
        }

        if (null !== $this->company) {
            $res['company'] = $this->company;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->dependCount) {
            $res['dependCount'] = $this->dependCount;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->isWatched) {
            $res['isWatched'] = $this->isWatched;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->provider) {
            $res['provider'] = $this->provider;
        }

        if (null !== $this->providerName) {
            $res['providerName'] = $this->providerName;
        }

        if (null !== $this->repoUrl) {
            $res['repoUrl'] = $this->repoUrl;
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

        if (null !== $this->watchCount) {
            $res['watchCount'] = $this->watchCount;
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
        if (isset($map['artifactId'])) {
            $model->artifactId = $map['artifactId'];
        }

        if (isset($map['assetType'])) {
            $model->assetType = $map['assetType'];
        }

        if (isset($map['company'])) {
            $model->company = $map['company'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['dependCount'])) {
            $model->dependCount = $map['dependCount'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['isWatched'])) {
            $model->isWatched = $map['isWatched'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['provider'])) {
            $model->provider = $map['provider'];
        }

        if (isset($map['providerName'])) {
            $model->providerName = $map['providerName'];
        }

        if (isset($map['repoUrl'])) {
            $model->repoUrl = $map['repoUrl'];
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

        if (isset($map['watchCount'])) {
            $model->watchCount = $map['watchCount'];
        }

        return $model;
    }
}
