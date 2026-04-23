<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models\ModelRouterUpdateBillingRuleResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $billingType;

    /**
     * @var int
     */
    public $deleteTag;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expireTime;

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
    public $modelCode;

    /**
     * @var int
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $modelType;

    /**
     * @var mixed
     */
    public $pricingConfig;

    /**
     * @var string
     */
    public $symbol;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'billingType' => 'billingType',
        'deleteTag' => 'deleteTag',
        'effectiveTime' => 'effectiveTime',
        'expireTime' => 'expireTime',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'id' => 'id',
        'modelCode' => 'modelCode',
        'modelId' => 'modelId',
        'modelName' => 'modelName',
        'modelType' => 'modelType',
        'pricingConfig' => 'pricingConfig',
        'symbol' => 'symbol',
        'version' => 'version',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['billingType'] = $this->billingType;
        }

        if (null !== $this->deleteTag) {
            $res['deleteTag'] = $this->deleteTag;
        }

        if (null !== $this->effectiveTime) {
            $res['effectiveTime'] = $this->effectiveTime;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
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

        if (null !== $this->modelCode) {
            $res['modelCode'] = $this->modelCode;
        }

        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
        }

        if (null !== $this->pricingConfig) {
            $res['pricingConfig'] = $this->pricingConfig;
        }

        if (null !== $this->symbol) {
            $res['symbol'] = $this->symbol;
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
        if (isset($map['billingType'])) {
            $model->billingType = $map['billingType'];
        }

        if (isset($map['deleteTag'])) {
            $model->deleteTag = $map['deleteTag'];
        }

        if (isset($map['effectiveTime'])) {
            $model->effectiveTime = $map['effectiveTime'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
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

        if (isset($map['modelCode'])) {
            $model->modelCode = $map['modelCode'];
        }

        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        if (isset($map['pricingConfig'])) {
            $model->pricingConfig = $map['pricingConfig'];
        }

        if (isset($map['symbol'])) {
            $model->symbol = $map['symbol'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
