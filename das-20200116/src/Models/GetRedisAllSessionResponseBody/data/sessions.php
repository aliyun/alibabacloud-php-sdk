<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data;

use AlibabaCloud\Dara\Model;

class sessions extends Model
{
    /**
     * @var string
     */
    public $addr;
    /**
     * @var string
     */
    public $age;
    /**
     * @var string
     */
    public $client;
    /**
     * @var string
     */
    public $clientDesc;
    /**
     * @var string
     */
    public $cmd;
    /**
     * @var int
     */
    public $db;
    /**
     * @var string
     */
    public $events;
    /**
     * @var int
     */
    public $fd;
    /**
     * @var string
     */
    public $flags;
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $idle;
    /**
     * @var int
     */
    public $multi;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var int
     */
    public $obl;
    /**
     * @var int
     */
    public $oll;
    /**
     * @var int
     */
    public $omem;
    /**
     * @var int
     */
    public $psub;
    /**
     * @var int
     */
    public $qbuf;
    /**
     * @var int
     */
    public $qbufFree;
    /**
     * @var int
     */
    public $sub;
    protected $_name = [
        'addr'       => 'Addr',
        'age'        => 'Age',
        'client'     => 'Client',
        'clientDesc' => 'ClientDesc',
        'cmd'        => 'Cmd',
        'db'         => 'Db',
        'events'     => 'Events',
        'fd'         => 'Fd',
        'flags'      => 'Flags',
        'id'         => 'Id',
        'idle'       => 'Idle',
        'multi'      => 'Multi',
        'name'       => 'Name',
        'nodeId'     => 'NodeId',
        'obl'        => 'Obl',
        'oll'        => 'Oll',
        'omem'       => 'Omem',
        'psub'       => 'Psub',
        'qbuf'       => 'Qbuf',
        'qbufFree'   => 'QbufFree',
        'sub'        => 'Sub',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }

        if (null !== $this->age) {
            $res['Age'] = $this->age;
        }

        if (null !== $this->client) {
            $res['Client'] = $this->client;
        }

        if (null !== $this->clientDesc) {
            $res['ClientDesc'] = $this->clientDesc;
        }

        if (null !== $this->cmd) {
            $res['Cmd'] = $this->cmd;
        }

        if (null !== $this->db) {
            $res['Db'] = $this->db;
        }

        if (null !== $this->events) {
            $res['Events'] = $this->events;
        }

        if (null !== $this->fd) {
            $res['Fd'] = $this->fd;
        }

        if (null !== $this->flags) {
            $res['Flags'] = $this->flags;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idle) {
            $res['Idle'] = $this->idle;
        }

        if (null !== $this->multi) {
            $res['Multi'] = $this->multi;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        if (null !== $this->obl) {
            $res['Obl'] = $this->obl;
        }

        if (null !== $this->oll) {
            $res['Oll'] = $this->oll;
        }

        if (null !== $this->omem) {
            $res['Omem'] = $this->omem;
        }

        if (null !== $this->psub) {
            $res['Psub'] = $this->psub;
        }

        if (null !== $this->qbuf) {
            $res['Qbuf'] = $this->qbuf;
        }

        if (null !== $this->qbufFree) {
            $res['QbufFree'] = $this->qbufFree;
        }

        if (null !== $this->sub) {
            $res['Sub'] = $this->sub;
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
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }

        if (isset($map['Age'])) {
            $model->age = $map['Age'];
        }

        if (isset($map['Client'])) {
            $model->client = $map['Client'];
        }

        if (isset($map['ClientDesc'])) {
            $model->clientDesc = $map['ClientDesc'];
        }

        if (isset($map['Cmd'])) {
            $model->cmd = $map['Cmd'];
        }

        if (isset($map['Db'])) {
            $model->db = $map['Db'];
        }

        if (isset($map['Events'])) {
            $model->events = $map['Events'];
        }

        if (isset($map['Fd'])) {
            $model->fd = $map['Fd'];
        }

        if (isset($map['Flags'])) {
            $model->flags = $map['Flags'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Idle'])) {
            $model->idle = $map['Idle'];
        }

        if (isset($map['Multi'])) {
            $model->multi = $map['Multi'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        if (isset($map['Obl'])) {
            $model->obl = $map['Obl'];
        }

        if (isset($map['Oll'])) {
            $model->oll = $map['Oll'];
        }

        if (isset($map['Omem'])) {
            $model->omem = $map['Omem'];
        }

        if (isset($map['Psub'])) {
            $model->psub = $map['Psub'];
        }

        if (isset($map['Qbuf'])) {
            $model->qbuf = $map['Qbuf'];
        }

        if (isset($map['QbufFree'])) {
            $model->qbufFree = $map['QbufFree'];
        }

        if (isset($map['Sub'])) {
            $model->sub = $map['Sub'];
        }

        return $model;
    }
}
