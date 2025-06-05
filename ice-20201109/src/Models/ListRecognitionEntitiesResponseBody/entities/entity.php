<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListRecognitionEntitiesResponseBody\entities;

use AlibabaCloud\Dara\Model;

class entity extends Model
{
    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityInfo;

    /**
     * @var string
     */
    public $entityName;
    protected $_name = [
        'entityId' => 'EntityId',
        'entityInfo' => 'EntityInfo',
        'entityName' => 'EntityName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->entityInfo) {
            $res['EntityInfo'] = $this->entityInfo;
        }

        if (null !== $this->entityName) {
            $res['EntityName'] = $this->entityName;
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
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['EntityInfo'])) {
            $model->entityInfo = $map['EntityInfo'];
        }

        if (isset($map['EntityName'])) {
            $model->entityName = $map['EntityName'];
        }

        return $model;
    }
}
