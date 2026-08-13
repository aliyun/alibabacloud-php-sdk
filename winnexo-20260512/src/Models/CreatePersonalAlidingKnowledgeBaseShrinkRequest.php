<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreatePersonalAlidingKnowledgeBaseShrinkRequest extends Model
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
     * @var string
     */
    public $objectBindingsShrink;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $syncConfigShrink;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'directoryId' => 'directoryId',
        'kbName' => 'kbName',
        'kbUrl' => 'kbUrl',
        'objectBindingsShrink' => 'objectBindings',
        'operatingObjectName' => 'operatingObjectName',
        'syncConfigShrink' => 'syncConfig',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
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

        if (null !== $this->objectBindingsShrink) {
            $res['objectBindings'] = $this->objectBindingsShrink;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->syncConfigShrink) {
            $res['syncConfig'] = $this->syncConfigShrink;
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
            $model->objectBindingsShrink = $map['objectBindings'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['syncConfig'])) {
            $model->syncConfigShrink = $map['syncConfig'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
