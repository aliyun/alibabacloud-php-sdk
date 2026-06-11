<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CacheCluster;

use AlibabaCloud\Dara\Model;

class tables extends Model
{
    /**
     * @var string
     */
    public $catalogId;

    /**
     * @var string
     */
    public $catalogProvider;

    /**
     * @var string
     */
    public $database;

    /**
     * @var string
     */
    public $table;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'catalogId' => 'catalogId',
        'catalogProvider' => 'catalogProvider',
        'database' => 'database',
        'table' => 'table',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalogId) {
            $res['catalogId'] = $this->catalogId;
        }

        if (null !== $this->catalogProvider) {
            $res['catalogProvider'] = $this->catalogProvider;
        }

        if (null !== $this->database) {
            $res['database'] = $this->database;
        }

        if (null !== $this->table) {
            $res['table'] = $this->table;
        }

        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
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
        if (isset($map['catalogId'])) {
            $model->catalogId = $map['catalogId'];
        }

        if (isset($map['catalogProvider'])) {
            $model->catalogProvider = $map['catalogProvider'];
        }

        if (isset($map['database'])) {
            $model->database = $map['database'];
        }

        if (isset($map['table'])) {
            $model->table = $map['table'];
        }

        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
