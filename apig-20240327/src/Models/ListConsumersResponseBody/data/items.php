<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponseBody\data;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $consumerId;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $updateTimestamp;
    protected $_name = [
        'consumerId' => 'consumerId',
        'createTimestamp' => 'createTimestamp',
        'deployStatus' => 'deployStatus',
        'description' => 'description',
        'enable' => 'enable',
        'name' => 'name',
        'updateTimestamp' => 'updateTimestamp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
        }

        if (null !== $this->createTimestamp) {
            $res['createTimestamp'] = $this->createTimestamp;
        }

        if (null !== $this->deployStatus) {
            $res['deployStatus'] = $this->deployStatus;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->enable) {
            $res['enable'] = $this->enable;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->updateTimestamp) {
            $res['updateTimestamp'] = $this->updateTimestamp;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        if (isset($map['createTimestamp'])) {
            $model->createTimestamp = $map['createTimestamp'];
        }

        if (isset($map['deployStatus'])) {
            $model->deployStatus = $map['deployStatus'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['updateTimestamp'])) {
            $model->updateTimestamp = $map['updateTimestamp'];
        }

        return $model;
    }
}
