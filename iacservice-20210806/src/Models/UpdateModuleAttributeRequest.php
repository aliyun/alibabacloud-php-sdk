<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\UpdateModuleAttributeRequest\groupInfo;

class UpdateModuleAttributeRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var groupInfo
     */
    public $groupInfo;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourcePath;

    /**
     * @var string
     */
    public $statePath;

    /**
     * @var string
     */
    public $versionStrategy;
    protected $_name = [
        'description' => 'description',
        'groupInfo' => 'groupInfo',
        'name' => 'name',
        'source' => 'source',
        'sourcePath' => 'sourcePath',
        'statePath' => 'statePath',
        'versionStrategy' => 'versionStrategy',
    ];

    public function validate()
    {
        if (null !== $this->groupInfo) {
            $this->groupInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->groupInfo) {
            $res['groupInfo'] = null !== $this->groupInfo ? $this->groupInfo->toArray($noStream) : $this->groupInfo;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourcePath) {
            $res['sourcePath'] = $this->sourcePath;
        }

        if (null !== $this->statePath) {
            $res['statePath'] = $this->statePath;
        }

        if (null !== $this->versionStrategy) {
            $res['versionStrategy'] = $this->versionStrategy;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['groupInfo'])) {
            $model->groupInfo = groupInfo::fromMap($map['groupInfo']);
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourcePath'])) {
            $model->sourcePath = $map['sourcePath'];
        }

        if (isset($map['statePath'])) {
            $model->statePath = $map['statePath'];
        }

        if (isset($map['versionStrategy'])) {
            $model->versionStrategy = $map['versionStrategy'];
        }

        return $model;
    }
}
