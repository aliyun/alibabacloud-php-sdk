<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alikafka\V20190916\Models\CreatePrePayOrderRequest\confluentConfig;

use AlibabaCloud\Dara\Model;

class ksqlList extends Model
{
    /**
     * @var int
     */
    public $cu;

    /**
     * @var string
     */
    public $internalId;

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
        'cu' => 'Cu',
        'internalId' => 'InternalId',
        'replica' => 'Replica',
        'storage' => 'Storage',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cu) {
            $res['Cu'] = $this->cu;
        }

        if (null !== $this->internalId) {
            $res['InternalId'] = $this->internalId;
        }

        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Cu'])) {
            $model->cu = $map['Cu'];
        }

        if (isset($map['InternalId'])) {
            $model->internalId = $map['InternalId'];
        }

        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
