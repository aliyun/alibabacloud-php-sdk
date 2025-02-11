<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetMySQLAllSessionAsyncResponseBody\data\sessionData;

use AlibabaCloud\Dara\Model;

class sessionList extends Model
{
    /**
     * @var string
     */
    public $client;
    /**
     * @var string
     */
    public $command;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var int
     */
    public $sessionId;
    /**
     * @var string
     */
    public $sqlTemplateId;
    /**
     * @var string
     */
    public $sqlText;
    /**
     * @var string
     */
    public $state;
    /**
     * @var int
     */
    public $time;
    /**
     * @var int
     */
    public $trxDuration;
    /**
     * @var string
     */
    public $trxId;
    /**
     * @var string
     */
    public $user;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
