<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData;

use AlibabaCloud\Tea\Model;

class sessionList extends Model
{
    /**
     * @description The IP address of the client.
     *
     * @example 47.100.XX.XX
     *
     * @var string
     */
    public $client;

    /**
     * @description The type of the command executed in the session.
     *
     * @example Query
     *
     * @var string
     */
    public $command;

    /**
     * @description The database name.
     *
     * @example dbTest
     *
     * @var string
     */
    public $dbName;

    /**
     * @description The session ID.
     *
     * @example 14521783
     *
     * @var int
     */
    public $sessionId;

    /**
     * @description The SQL template ID.
     *
     * >  This parameter is returned only when you use a PolarDB-X 2.0 instance.
     * @example a7cac1a9
     *
     * @var string
     */
    public $sqlTemplateId;

    /**
     * @description The SQL statement executed in the session.
     *
     * @example INSERT INTO ...
     *
     * @var string
     */
    public $sqlText;

    /**
     * @description The status of the session.
     *
     * @example starting
     *
     * @var string
     */
    public $state;

    /**
     * @description The execution duration of the session. Unit: seconds.
     *
     * @example 6
     *
     * @var int
     */
    public $time;

    /**
     * @description The duration of the transaction. Unit: seconds.
     *
     * @example 6
     *
     * @var int
     */
    public $trxDuration;

    /**
     * @description The ID of the transaction to which the session belongs.
     *
     * @example 754300775132
     *
     * @var string
     */
    public $trxId;

    /**
     * @description The username of the database account.
     *
     * @example testUser
     *
     * @var string
     */
    public $user;

    /**
     * @description The alias of the IP address of the client.
     *
     * @example master-shanghai
     *
     * @var string
     */
    public $userClientAlias;
    protected $_name = [
        'client'          => 'Client',
        'command'         => 'Command',
        'dbName'          => 'DbName',
        'sessionId'       => 'SessionId',
        'sqlTemplateId'   => 'SqlTemplateId',
        'sqlText'         => 'SqlText',
        'state'           => 'State',
        'time'            => 'Time',
        'trxDuration'     => 'TrxDuration',
        'trxId'           => 'TrxId',
        'user'            => 'User',
        'userClientAlias' => 'UserClientAlias',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->client) {
            $res['Client'] = $this->client;
        }
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sqlTemplateId) {
            $res['SqlTemplateId'] = $this->sqlTemplateId;
        }
        if (null !== $this->sqlText) {
            $res['SqlText'] = $this->sqlText;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->trxDuration) {
            $res['TrxDuration'] = $this->trxDuration;
        }
        if (null !== $this->trxId) {
            $res['TrxId'] = $this->trxId;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }
        if (null !== $this->userClientAlias) {
            $res['UserClientAlias'] = $this->userClientAlias;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Client'])) {
            $model->client = $map['Client'];
        }
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SqlTemplateId'])) {
            $model->sqlTemplateId = $map['SqlTemplateId'];
        }
        if (isset($map['SqlText'])) {
            $model->sqlText = $map['SqlText'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TrxDuration'])) {
            $model->trxDuration = $map['TrxDuration'];
        }
        if (isset($map['TrxId'])) {
            $model->trxId = $map['TrxId'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }
        if (isset($map['UserClientAlias'])) {
            $model->userClientAlias = $map['UserClientAlias'];
        }

        return $model;
    }
}
