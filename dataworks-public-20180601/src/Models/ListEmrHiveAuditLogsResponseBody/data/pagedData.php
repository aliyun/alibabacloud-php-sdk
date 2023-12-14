<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20180601\Models\ListEmrHiveAuditLogsResponseBody\data;

use AlibabaCloud\Tea\Model;

class pagedData extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $database;

    /**
     * @example 1564019679506
     *
     * @var int
     */
    public $eventTime;

    /**
     * @var string[]
     */
    public $groups;

    /**
     * @example CREATE_TABLE
     *
     * @var string
     */
    public $operation;

    /**
     * @example test_table
     *
     * @var string
     */
    public $table;

    /**
     * @example root
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'database'  => 'Database',
        'eventTime' => 'EventTime',
        'groups'    => 'Groups',
        'operation' => 'Operation',
        'table'     => 'Table',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->groups) {
            $res['Groups'] = $this->groups;
        }
        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }
        if (null !== $this->table) {
            $res['Table'] = $this->table;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pagedData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Groups'])) {
            if (!empty($map['Groups'])) {
                $model->groups = $map['Groups'];
            }
        }
        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }
        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
