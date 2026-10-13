<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\UpdateManagedAgentRequest\body\skills\versionSelector;

class skills extends Model
{
    /**
     * @var string
     */
    public $name;

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
        'name' => 'name',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
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
