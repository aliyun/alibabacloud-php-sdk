<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class CreateIMBotInput extends Model
{
    /**
     * @var string
     */
    public $botBizId;

    /**
     * @var string
     */
    public $botBizSecret;

    /**
     * @var string
     */
    public $botBizType;

    /**
     * @var string
     */
    public $botMode;

    /**
     * @var string
     */
    public $botName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var IMBotMetadata
     */
    public $metadata;

    /**
     * @var int
     */
    public $minInstances;
    protected $_name = [
        'botBizId' => 'botBizId',
        'botBizSecret' => 'botBizSecret',
        'botBizType' => 'botBizType',
        'botMode' => 'botMode',
        'botName' => 'botName',
        'description' => 'description',
        'metadata' => 'metadata',
        'minInstances' => 'minInstances',
    ];

    public function validate()
    {
        if (null !== $this->metadata) {
            $this->metadata->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botBizId) {
            $res['botBizId'] = $this->botBizId;
        }

        if (null !== $this->botBizSecret) {
            $res['botBizSecret'] = $this->botBizSecret;
        }

        if (null !== $this->botBizType) {
            $res['botBizType'] = $this->botBizType;
        }

        if (null !== $this->botMode) {
            $res['botMode'] = $this->botMode;
        }

        if (null !== $this->botName) {
            $res['botName'] = $this->botName;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = null !== $this->metadata ? $this->metadata->toArray($noStream) : $this->metadata;
        }

        if (null !== $this->minInstances) {
            $res['minInstances'] = $this->minInstances;
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
        if (isset($map['botBizId'])) {
            $model->botBizId = $map['botBizId'];
        }

        if (isset($map['botBizSecret'])) {
            $model->botBizSecret = $map['botBizSecret'];
        }

        if (isset($map['botBizType'])) {
            $model->botBizType = $map['botBizType'];
        }

        if (isset($map['botMode'])) {
            $model->botMode = $map['botMode'];
        }

        if (isset($map['botName'])) {
            $model->botName = $map['botName'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = IMBotMetadata::fromMap($map['metadata']);
        }

        if (isset($map['minInstances'])) {
            $model->minInstances = $map['minInstances'];
        }

        return $model;
    }
}
