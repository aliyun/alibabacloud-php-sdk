<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RocketMQ\V20220801\Models\ListInspectionTemplatesResponseBody\data\configuration;

class data extends Model
{
    /**
     * @var configuration
     */
    public $configuration;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var mixed
     */
    public $params;

    /**
     * @var string
     */
    public $scopeType;

    /**
     * @var string
     */
    public $templateCode;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'configuration' => 'configuration',
        'description' => 'description',
        'name' => 'name',
        'params' => 'params',
        'scopeType' => 'scopeType',
        'templateCode' => 'templateCode',
        'version' => 'version',
    ];

    public function validate()
    {
        if (null !== $this->configuration) {
            $this->configuration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configuration) {
            $res['configuration'] = null !== $this->configuration ? $this->configuration->toArray($noStream) : $this->configuration;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->params) {
            $res['params'] = $this->params;
        }

        if (null !== $this->scopeType) {
            $res['scopeType'] = $this->scopeType;
        }

        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
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
        if (isset($map['configuration'])) {
            $model->configuration = configuration::fromMap($map['configuration']);
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['params'])) {
            $model->params = $map['params'];
        }

        if (isset($map['scopeType'])) {
            $model->scopeType = $map['scopeType'];
        }

        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
