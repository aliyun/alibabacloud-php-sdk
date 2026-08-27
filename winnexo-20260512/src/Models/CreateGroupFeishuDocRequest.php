<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateGroupFeishuDocRequest\objectBindings;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreateGroupFeishuDocRequest\syncConfig;

class CreateGroupFeishuDocRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $docUrl;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $notes;

    /**
     * @var objectBindings[]
     */
    public $objectBindings;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $sourceTags;

    /**
     * @var syncConfig
     */
    public $syncConfig;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'description' => 'description',
        'directoryId' => 'directoryId',
        'docUrl' => 'docUrl',
        'groupId' => 'groupId',
        'name' => 'name',
        'notes' => 'notes',
        'objectBindings' => 'objectBindings',
        'operatingObjectName' => 'operatingObjectName',
        'sourceTags' => 'sourceTags',
        'syncConfig' => 'syncConfig',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (\is_array($this->objectBindings)) {
            Model::validateArray($this->objectBindings);
        }
        if (null !== $this->syncConfig) {
            $this->syncConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->docUrl) {
            $res['docUrl'] = $this->docUrl;
        }

        if (null !== $this->groupId) {
            $res['groupId'] = $this->groupId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->notes) {
            $res['notes'] = $this->notes;
        }

        if (null !== $this->objectBindings) {
            if (\is_array($this->objectBindings)) {
                $res['objectBindings'] = [];
                $n1 = 0;
                foreach ($this->objectBindings as $item1) {
                    $res['objectBindings'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->sourceTags) {
            $res['sourceTags'] = $this->sourceTags;
        }

        if (null !== $this->syncConfig) {
            $res['syncConfig'] = null !== $this->syncConfig ? $this->syncConfig->toArray($noStream) : $this->syncConfig;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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

        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['docUrl'])) {
            $model->docUrl = $map['docUrl'];
        }

        if (isset($map['groupId'])) {
            $model->groupId = $map['groupId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['notes'])) {
            $model->notes = $map['notes'];
        }

        if (isset($map['objectBindings'])) {
            if (!empty($map['objectBindings'])) {
                $model->objectBindings = [];
                $n1 = 0;
                foreach ($map['objectBindings'] as $item1) {
                    $model->objectBindings[$n1] = objectBindings::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['sourceTags'])) {
            $model->sourceTags = $map['sourceTags'];
        }

        if (isset($map['syncConfig'])) {
            $model->syncConfig = syncConfig::fromMap($map['syncConfig']);
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
