<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListConsumersResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example cs-csheiftlhtgmp0j0hp4g
     *
     * @var string
     */
    public $consumerId;

    /**
     * @example 1721097861050
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @example {}
     *
     * @var string
     */
    public $deployStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example user-service
     *
     * @var string
     */
    public $name;

    /**
     * @example 1721123855214
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return items
     */
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
