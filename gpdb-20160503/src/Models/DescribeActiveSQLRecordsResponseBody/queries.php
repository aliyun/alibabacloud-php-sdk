<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeActiveSQLRecordsResponseBody;

use AlibabaCloud\Dara\Model;

class queries extends Model
{
    /**
     * @var string
     */
    public $clientAddr;
    /**
     * @var string
     */
    public $database;
    /**
     * @var string
     */
    public $PID;
    /**
     * @var string
     */
    public $query;
    /**
     * @var string
     */
    public $queryDuration;
    /**
     * @var string
     */
    public $queryStart;
    /**
     * @var string
     */
    public $sessionID;
    /**
     * @var string
     */
    public $sqlTruncated;
    /**
     * @var string
     */
    public $sqlTruncatedThreshold;
    /**
     * @var string
     */
    public $state;
    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'clientAddr'            => 'ClientAddr',
        'database'              => 'Database',
        'PID'                   => 'PID',
        'query'                 => 'Query',
        'queryDuration'         => 'QueryDuration',
        'queryStart'            => 'QueryStart',
        'sessionID'             => 'SessionID',
        'sqlTruncated'          => 'SqlTruncated',
        'sqlTruncatedThreshold' => 'SqlTruncatedThreshold',
        'state'                 => 'State',
        'user'                  => 'User',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientAddr) {
            $res['ClientAddr'] = $this->clientAddr;
        }

        if (null !== $this->database) {
            $res['Database'] = $this->database;
        }

        if (null !== $this->PID) {
            $res['PID'] = $this->PID;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->queryDuration) {
            $res['QueryDuration'] = $this->queryDuration;
        }

        if (null !== $this->queryStart) {
            $res['QueryStart'] = $this->queryStart;
        }

        if (null !== $this->sessionID) {
            $res['SessionID'] = $this->sessionID;
        }

        if (null !== $this->sqlTruncated) {
            $res['SqlTruncated'] = $this->sqlTruncated;
        }

        if (null !== $this->sqlTruncatedThreshold) {
            $res['SqlTruncatedThreshold'] = $this->sqlTruncatedThreshold;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->user) {
            $res['User'] = $this->user;
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
        if (isset($map['ClientAddr'])) {
            $model->clientAddr = $map['ClientAddr'];
        }

        if (isset($map['Database'])) {
            $model->database = $map['Database'];
        }

        if (isset($map['PID'])) {
            $model->PID = $map['PID'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['QueryDuration'])) {
            $model->queryDuration = $map['QueryDuration'];
        }

        if (isset($map['QueryStart'])) {
            $model->queryStart = $map['QueryStart'];
        }

        if (isset($map['SessionID'])) {
            $model->sessionID = $map['SessionID'];
        }

        if (isset($map['SqlTruncated'])) {
            $model->sqlTruncated = $map['SqlTruncated'];
        }

        if (isset($map['SqlTruncatedThreshold'])) {
            $model->sqlTruncatedThreshold = $map['SqlTruncatedThreshold'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
