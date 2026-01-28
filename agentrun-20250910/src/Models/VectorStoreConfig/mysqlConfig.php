<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models\VectorStoreConfig;

use AlibabaCloud\Dara\Model;

class mysqlConfig extends Model
{
    /**
     * @var string
     */
    public $collectionName;

    /**
     * @var string
     */
    public $credentialName;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $user;

    /**
     * @var int
     */
    public $vectorDimension;
    protected $_name = [
        'collectionName' => 'collectionName',
        'credentialName' => 'credentialName',
        'dbName' => 'dbName',
        'host' => 'host',
        'port' => 'port',
        'user' => 'user',
        'vectorDimension' => 'vectorDimension',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collectionName) {
            $res['collectionName'] = $this->collectionName;
        }

        if (null !== $this->credentialName) {
            $res['credentialName'] = $this->credentialName;
        }

        if (null !== $this->dbName) {
            $res['dbName'] = $this->dbName;
        }

        if (null !== $this->host) {
            $res['host'] = $this->host;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        if (null !== $this->vectorDimension) {
            $res['vectorDimension'] = $this->vectorDimension;
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
        if (isset($map['collectionName'])) {
            $model->collectionName = $map['collectionName'];
        }

        if (isset($map['credentialName'])) {
            $model->credentialName = $map['credentialName'];
        }

        if (isset($map['dbName'])) {
            $model->dbName = $map['dbName'];
        }

        if (isset($map['host'])) {
            $model->host = $map['host'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        if (isset($map['vectorDimension'])) {
            $model->vectorDimension = $map['vectorDimension'];
        }

        return $model;
    }
}
