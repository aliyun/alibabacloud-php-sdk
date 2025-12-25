<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Milvus\V20231012\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Milvus\V20231012\Models\MigrationSource\authInfo;
use AlibabaCloud\SDK\Milvus\V20231012\Models\MigrationSource\endpoint;

class MigrationSource extends Model
{
    /**
     * @var authInfo
     */
    public $authInfo;

    /**
     * @var string
     */
    public $database;

    /**
     * @var endpoint
     */
    public $endpoint;
    protected $_name = [
        'authInfo' => 'authInfo',
        'database' => 'database',
        'endpoint' => 'endpoint',
    ];

    public function validate()
    {
        if (null !== $this->authInfo) {
            $this->authInfo->validate();
        }
        if (null !== $this->endpoint) {
            $this->endpoint->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authInfo) {
            $res['authInfo'] = null !== $this->authInfo ? $this->authInfo->toArray($noStream) : $this->authInfo;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = null !== $this->endpoint ? $this->endpoint->toArray($noStream) : $this->endpoint;
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
        if (isset($map['authInfo'])) {
            $model->authInfo = authInfo::fromMap($map['authInfo']);
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = endpoint::fromMap($map['endpoint']);
        }

        return $model;
    }
}
