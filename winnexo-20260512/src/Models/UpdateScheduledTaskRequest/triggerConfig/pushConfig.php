<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateScheduledTaskRequest\triggerConfig;

use AlibabaCloud\Dara\Model;

class pushConfig extends Model
{
    /**
     * @var string
     */
    public $channelType;

    /**
     * @var string
     */
    public $contentScope;

    /**
     * @var string
     */
    public $deliveryMethod;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $fileFormat;

    /**
     * @var string
     */
    public $operatingObjectName;

    /**
     * @var string
     */
    public $receiverType;
    protected $_name = [
        'channelType' => 'channelType',
        'contentScope' => 'contentScope',
        'deliveryMethod' => 'deliveryMethod',
        'enabled' => 'enabled',
        'fileFormat' => 'fileFormat',
        'operatingObjectName' => 'operatingObjectName',
        'receiverType' => 'receiverType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelType) {
            $res['channelType'] = $this->channelType;
        }

        if (null !== $this->contentScope) {
            $res['contentScope'] = $this->contentScope;
        }

        if (null !== $this->deliveryMethod) {
            $res['deliveryMethod'] = $this->deliveryMethod;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->fileFormat) {
            $res['fileFormat'] = $this->fileFormat;
        }

        if (null !== $this->operatingObjectName) {
            $res['operatingObjectName'] = $this->operatingObjectName;
        }

        if (null !== $this->receiverType) {
            $res['receiverType'] = $this->receiverType;
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
        if (isset($map['channelType'])) {
            $model->channelType = $map['channelType'];
        }

        if (isset($map['contentScope'])) {
            $model->contentScope = $map['contentScope'];
        }

        if (isset($map['deliveryMethod'])) {
            $model->deliveryMethod = $map['deliveryMethod'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['fileFormat'])) {
            $model->fileFormat = $map['fileFormat'];
        }

        if (isset($map['operatingObjectName'])) {
            $model->operatingObjectName = $map['operatingObjectName'];
        }

        if (isset($map['receiverType'])) {
            $model->receiverType = $map['receiverType'];
        }

        return $model;
    }
}
