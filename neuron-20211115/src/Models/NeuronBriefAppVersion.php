<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class NeuronBriefAppVersion extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var int
     */
    public $appId;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $manageType;

    /**
     * @var string
     */
    public $mobiCommitId;

    /**
     * @var int
     */
    public $mobiId;

    /**
     * @var string
     */
    public $mobiModuleId;

    /**
     * @var string
     */
    public $mobiUrl;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'accountId' => 'accountId',
        'appId' => 'appId',
        'enterpriseId' => 'enterpriseId',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'manageType' => 'manageType',
        'mobiCommitId' => 'mobiCommitId',
        'mobiId' => 'mobiId',
        'mobiModuleId' => 'mobiModuleId',
        'mobiUrl' => 'mobiUrl',
        'productId' => 'productId',
        'status' => 'status',
        'version' => 'version',
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

        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->manageType) {
            $res['manageType'] = $this->manageType;
        }

        if (null !== $this->mobiCommitId) {
            $res['mobiCommitId'] = $this->mobiCommitId;
        }

        if (null !== $this->mobiId) {
            $res['mobiId'] = $this->mobiId;
        }

        if (null !== $this->mobiModuleId) {
            $res['mobiModuleId'] = $this->mobiModuleId;
        }

        if (null !== $this->mobiUrl) {
            $res['mobiUrl'] = $this->mobiUrl;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
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

        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['manageType'])) {
            $model->manageType = $map['manageType'];
        }

        if (isset($map['mobiCommitId'])) {
            $model->mobiCommitId = $map['mobiCommitId'];
        }

        if (isset($map['mobiId'])) {
            $model->mobiId = $map['mobiId'];
        }

        if (isset($map['mobiModuleId'])) {
            $model->mobiModuleId = $map['mobiModuleId'];
        }

        if (isset($map['mobiUrl'])) {
            $model->mobiUrl = $map['mobiUrl'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
