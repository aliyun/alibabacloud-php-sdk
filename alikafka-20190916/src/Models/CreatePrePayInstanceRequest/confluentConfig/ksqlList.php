<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayInstanceRequest\confluentConfig;

use AlibabaCloud\Dara\Model;

class ksqlList extends Model
{
    /**
     * @var string
     */
    public $internalId;

    /**
     * @var int
     */
    public $cu;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var int
     */
    public $storage;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'internalId' => 'InternalId',
        'cu' => 'cu',
        'replica' => 'replica',
        'storage' => 'storage',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->internalId) {
            $res['InternalId'] = $this->internalId;
        }

        if (null !== $this->cu) {
            $res['cu'] = $this->cu;
        }

        if (null !== $this->replica) {
            $res['replica'] = $this->replica;
        }

        if (null !== $this->storage) {
            $res['storage'] = $this->storage;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['InternalId'])) {
            $model->internalId = $map['InternalId'];
        }

        if (isset($map['cu'])) {
            $model->cu = $map['cu'];
        }

        if (isset($map['replica'])) {
            $model->replica = $map['replica'];
        }

        if (isset($map['storage'])) {
            $model->storage = $map['storage'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
