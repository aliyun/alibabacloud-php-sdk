<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\GetKnowledgeBaseResponseBody;

use AlibabaCloud\Dara\Model;

class vectorDBConfig extends Model
{
    /**
     * @var string
     */
    public $collectionName;

    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $connectionName;

    /**
     * @var string
     */
    public $vectorDBType;
    protected $_name = [
        'collectionName' => 'CollectionName',
        'connectionId' => 'ConnectionId',
        'connectionName' => 'ConnectionName',
        'vectorDBType' => 'VectorDBType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['CollectionName'] = $this->collectionName;
        }

        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->connectionName) {
            $res['ConnectionName'] = $this->connectionName;
        }

        if (null !== $this->vectorDBType) {
            $res['VectorDBType'] = $this->vectorDBType;
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
        if (isset($map['CollectionName'])) {
            $model->collectionName = $map['CollectionName'];
        }

        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['ConnectionName'])) {
            $model->connectionName = $map['ConnectionName'];
        }

        if (isset($map['VectorDBType'])) {
            $model->vectorDBType = $map['VectorDBType'];
        }

        return $model;
    }
}
