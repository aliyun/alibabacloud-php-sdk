<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CreateExternalAgentResponseBody\data\skills\versionSelector;

class skills extends Model
{
    /**
     * @var string
     */
    public $appliedVersion;

    /**
     * @var bool
     */
    public $fromTemplate;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $resolvedVersion;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $version;

    /**
     * @var versionSelector
     */
    public $versionSelector;
    protected $_name = [
        'appliedVersion' => 'appliedVersion',
        'fromTemplate' => 'fromTemplate',
        'name' => 'name',
        'resolvedVersion' => 'resolvedVersion',
        'sourceType' => 'sourceType',
        'version' => 'version',
        'versionSelector' => 'versionSelector',
    ];

    public function validate()
    {
        if (null !== $this->versionSelector) {
            $this->versionSelector->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appliedVersion) {
            $res['appliedVersion'] = $this->appliedVersion;
        }

        if (null !== $this->fromTemplate) {
            $res['fromTemplate'] = $this->fromTemplate;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resolvedVersion) {
            $res['resolvedVersion'] = $this->resolvedVersion;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->versionSelector) {
            $res['versionSelector'] = null !== $this->versionSelector ? $this->versionSelector->toArray($noStream) : $this->versionSelector;
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
        if (isset($map['appliedVersion'])) {
            $model->appliedVersion = $map['appliedVersion'];
        }

        if (isset($map['fromTemplate'])) {
            $model->fromTemplate = $map['fromTemplate'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resolvedVersion'])) {
            $model->resolvedVersion = $map['resolvedVersion'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['versionSelector'])) {
            $model->versionSelector = versionSelector::fromMap($map['versionSelector']);
        }

        return $model;
    }
}
