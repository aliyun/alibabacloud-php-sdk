<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseRequest\objectBindings;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\CreatePersonalAlidingKnowledgeBaseRequest\syncConfig;

class CreatePersonalAlidingKnowledgeBaseRequest extends Model
{
    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $kbName;

    /**
     * @var string
     */
    public $kbUrl;

    /**
     * @var objectBindings[]
     */
    public $objectBindings;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var syncConfig
     */
    public $syncConfig;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'directoryId' => 'directoryId',
        'kbName' => 'kbName',
        'kbUrl' => 'kbUrl',
        'objectBindings' => 'objectBindings',
        'operatingObjectName' => 'operatingObjectName',
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
        if (null !== $this->directoryId) {
            $res['directoryId'] = $this->directoryId;
        }

        if (null !== $this->kbName) {
            $res['kbName'] = $this->kbName;
        }

        if (null !== $this->kbUrl) {
            $res['kbUrl'] = $this->kbUrl;
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
        if (isset($map['directoryId'])) {
            $model->directoryId = $map['directoryId'];
        }

        if (isset($map['kbName'])) {
            $model->kbName = $map['kbName'];
        }

        if (isset($map['kbUrl'])) {
            $model->kbUrl = $map['kbUrl'];
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

        if (isset($map['syncConfig'])) {
            $model->syncConfig = syncConfig::fromMap($map['syncConfig']);
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
