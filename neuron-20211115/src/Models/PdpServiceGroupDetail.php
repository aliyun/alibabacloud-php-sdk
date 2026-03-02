<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpServiceGroupDetail extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edasId;

    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var string
     */
    public $env;

    /**
     * @var string
     */
    public $envType;

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
    public $groupType;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $logProject;

    /**
     * @var string
     */
    public $logStore;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $orgType;

    /**
     * @var int
     */
    public $pbcId;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var int
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'accountId' => 'accountId',
        'alias' => 'alias',
        'description' => 'description',
        'edasId' => 'edasId',
        'enterpriseId' => 'enterpriseId',
        'env' => 'env',
        'envType' => 'envType',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'groupType' => 'groupType',
        'id' => 'id',
        'logProject' => 'logProject',
        'logStore' => 'logStore',
        'name' => 'name',
        'orgType' => 'orgType',
        'pbcId' => 'pbcId',
        'pipelineId' => 'pipelineId',
        'productId' => 'productId',
        'productName' => 'productName',
        'region' => 'region',
        'requestId' => 'requestId',
        'serviceId' => 'serviceId',
        'type' => 'type',
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

        if (null !== $this->alias) {
            $res['alias'] = $this->alias;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->edasId) {
            $res['edasId'] = $this->edasId;
        }

        if (null !== $this->enterpriseId) {
            $res['enterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->env) {
            $res['env'] = $this->env;
        }

        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupType) {
            $res['groupType'] = $this->groupType;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->logProject) {
            $res['logProject'] = $this->logProject;
        }

        if (null !== $this->logStore) {
            $res['logStore'] = $this->logStore;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->orgType) {
            $res['orgType'] = $this->orgType;
        }

        if (null !== $this->pbcId) {
            $res['pbcId'] = $this->pbcId;
        }

        if (null !== $this->pipelineId) {
            $res['pipelineId'] = $this->pipelineId;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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

        if (isset($map['alias'])) {
            $model->alias = $map['alias'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['edasId'])) {
            $model->edasId = $map['edasId'];
        }

        if (isset($map['enterpriseId'])) {
            $model->enterpriseId = $map['enterpriseId'];
        }

        if (isset($map['env'])) {
            $model->env = $map['env'];
        }

        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['groupType'])) {
            $model->groupType = $map['groupType'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['logProject'])) {
            $model->logProject = $map['logProject'];
        }

        if (isset($map['logStore'])) {
            $model->logStore = $map['logStore'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['orgType'])) {
            $model->orgType = $map['orgType'];
        }

        if (isset($map['pbcId'])) {
            $model->pbcId = $map['pbcId'];
        }

        if (isset($map['pipelineId'])) {
            $model->pipelineId = $map['pipelineId'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
