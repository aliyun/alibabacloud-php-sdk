<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetProductResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketAgentConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketIcon;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketMcpConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketModelConfig;
use AlibabaCloud\SDK\APIG\V20240327\Models\HiMarketProductFeature;

class data extends Model
{
    /**
     * @var HiMarketAgentConfig
     */
    public $agentConfig;

    /**
     * @var bool
     */
    public $autoApprove;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $document;

    /**
     * @var HiMarketProductFeature
     */
    public $feature;

    /**
     * @var HiMarketIcon
     */
    public $icon;

    /**
     * @var HiMarketMcpConfig
     */
    public $mcpConfig;

    /**
     * @var HiMarketModelConfig
     */
    public $modelConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'agentConfig' => 'agentConfig',
        'autoApprove' => 'autoApprove',
        'description' => 'description',
        'document' => 'document',
        'feature' => 'feature',
        'icon' => 'icon',
        'mcpConfig' => 'mcpConfig',
        'modelConfig' => 'modelConfig',
        'name' => 'name',
        'productId' => 'productId',
        'regionId' => 'regionId',
        'status' => 'status',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->agentConfig) {
            $this->agentConfig->validate();
        }
        if (null !== $this->feature) {
            $this->feature->validate();
        }
        if (null !== $this->icon) {
            $this->icon->validate();
        }
        if (null !== $this->mcpConfig) {
            $this->mcpConfig->validate();
        }
        if (null !== $this->modelConfig) {
            $this->modelConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentConfig) {
            $res['agentConfig'] = null !== $this->agentConfig ? $this->agentConfig->toArray($noStream) : $this->agentConfig;
        }

        if (null !== $this->autoApprove) {
            $res['autoApprove'] = $this->autoApprove;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->document) {
            $res['document'] = $this->document;
        }

        if (null !== $this->feature) {
            $res['feature'] = null !== $this->feature ? $this->feature->toArray($noStream) : $this->feature;
        }

        if (null !== $this->icon) {
            $res['icon'] = null !== $this->icon ? $this->icon->toArray($noStream) : $this->icon;
        }

        if (null !== $this->mcpConfig) {
            $res['mcpConfig'] = null !== $this->mcpConfig ? $this->mcpConfig->toArray($noStream) : $this->mcpConfig;
        }

        if (null !== $this->modelConfig) {
            $res['modelConfig'] = null !== $this->modelConfig ? $this->modelConfig->toArray($noStream) : $this->modelConfig;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['agentConfig'])) {
            $model->agentConfig = HiMarketAgentConfig::fromMap($map['agentConfig']);
        }

        if (isset($map['autoApprove'])) {
            $model->autoApprove = $map['autoApprove'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['document'])) {
            $model->document = $map['document'];
        }

        if (isset($map['feature'])) {
            $model->feature = HiMarketProductFeature::fromMap($map['feature']);
        }

        if (isset($map['icon'])) {
            $model->icon = HiMarketIcon::fromMap($map['icon']);
        }

        if (isset($map['mcpConfig'])) {
            $model->mcpConfig = HiMarketMcpConfig::fromMap($map['mcpConfig']);
        }

        if (isset($map['modelConfig'])) {
            $model->modelConfig = HiMarketModelConfig::fromMap($map['modelConfig']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
