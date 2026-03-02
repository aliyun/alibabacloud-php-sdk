<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class Pbc extends Model
{
    /**
     * @var string
     */
    public $alias;

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
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $developerId;

    /**
     * @var string
     */
    public $developerName;

    /**
     * @var int
     */
    public $forkCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var int
     */
    public $invorkCount;

    /**
     * @var bool
     */
    public $isWatched;

    /**
     * @var int
     */
    public $latestVersionId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $watchCount;
    protected $_name = [
        'alias' => 'alias',
        'assetType' => 'assetType',
        'company' => 'company',
        'companyId' => 'companyId',
        'description' => 'description',
        'developerId' => 'developerId',
        'developerName' => 'developerName',
        'forkCount' => 'forkCount',
        'id' => 'id',
        'industry' => 'industry',
        'invorkCount' => 'invorkCount',
        'isWatched' => 'isWatched',
        'latestVersionId' => 'latestVersionId',
        'marketId' => 'marketId',
        'name' => 'name',
        'requestId' => 'requestId',
        'type' => 'type',
        'watchCount' => 'watchCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
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

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->developerId) {
            $res['developerId'] = $this->developerId;
        }

        if (null !== $this->developerName) {
            $res['developerName'] = $this->developerName;
        }

        if (null !== $this->forkCount) {
            $res['forkCount'] = $this->forkCount;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->invorkCount) {
            $res['invorkCount'] = $this->invorkCount;
        }

        if (null !== $this->isWatched) {
            $res['isWatched'] = $this->isWatched;
        }

        if (null !== $this->latestVersionId) {
            $res['latestVersionId'] = $this->latestVersionId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
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

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['developerId'])) {
            $model->developerId = $map['developerId'];
        }

        if (isset($map['developerName'])) {
            $model->developerName = $map['developerName'];
        }

        if (isset($map['forkCount'])) {
            $model->forkCount = $map['forkCount'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['invorkCount'])) {
            $model->invorkCount = $map['invorkCount'];
        }

        if (isset($map['isWatched'])) {
            $model->isWatched = $map['isWatched'];
        }

        if (isset($map['latestVersionId'])) {
            $model->latestVersionId = $map['latestVersionId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['watchCount'])) {
            $model->watchCount = $map['watchCount'];
        }

        return $model;
    }
}
