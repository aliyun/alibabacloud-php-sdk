<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetRedisAllSessionResponseBody\data;

use AlibabaCloud\Tea\Model;

class sessions extends Model
{
    /**
     * @description The IP address and port number of the client.
     *
     * @example 172.16.XX.XX:53458
     *
     * @var string
     */
    public $addr;

    /**
     * @description The connection duration of the session. Unit: seconds.
     *
     * @example 12
     *
     * @var string
     */
    public $age;

    /**
     * @description The IP address of the client.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $client;

    /**
     * @description The alias of the client.
     *
     * @example prod ip
     *
     * @var string
     */
    public $clientDesc;

    /**
     * @description The command that was last run.
     *
     * @example PING
     *
     * @var string
     */
    public $cmd;

    /**
     * @description The ID of the database that the client is using.
     *
     * @example 0
     *
     * @var int
     */
    public $db;

    /**
     * @description The file descriptor event. Valid values:
     *
     *   **r**: Client sockets are readable in the event loop.
     *   **w**: Client sockets are writable in the event loop.
     *
     * @example r
     *
     * @var string
     */
    public $events;

    /**
     * @description The file descriptor that is used by sockets.
     *
     * @example 73
     *
     * @var int
     */
    public $fd;

    /**
     * @description The client flag. Valid values:
     *
     *   **A**: The connection needs to be closed at the earliest opportunity.
     *   **b**: The client is waiting for blocked events.
     *   **c**: The connection is closed after all replies are written.
     *   **d**: The monitored keys have been modified, and the `EXEC` command is about to fail.
     *   **i**: The client is waiting for VM I/O operations. This value is no longer used.
     *   **M**: The client is the primary node.
     *   **N**: No special flags are configured.
     *   **O**: The client is in monitor mode.
     *   **r**: The client is a cluster node in read-only mode.
     *   **S**: The client is a replica node in normal mode.
     *   **u**: The client is not blocked.
     *   **U**: The client is connected by using UNIX domain sockets.
     *   **x**: The client is executing a transaction.
     *
     * @example N
     *
     * @var string
     */
    public $flags;

    /**
     * @description The client ID.
     *
     * @example 9080586
     *
     * @var int
     */
    public $id;

    /**
     * @description The duration during which the session is in the idle state. Unit: seconds.
     *
     * @example 8
     *
     * @var int
     */
    public $idle;

    /**
     * @description The number of commands in `MULTI` or `EXEC`.
     *
     * @example -1
     *
     * @var int
     */
    public $multi;

    /**
     * @description The name of the client.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The node ID.
     *
     * @example r-2zemyfd1sh1u2i****-proxy-14#1679****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The size of the fixed output buffer. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $obl;

    /**
     * @description The number of objects contained in the output list.
     *
     * @example 0
     *
     * @var int
     */
    public $oll;

    /**
     * @description The size of the output buffer. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $omem;

    /**
     * @description The number of subscriptions that match the pattern.
     *
     * @example 0
     *
     * @var int
     */
    public $psub;

    /**
     * @description The size of the input buffer. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $qbuf;

    /**
     * @description The remaining size of the input buffer. Unit: bytes.
     *
     * @example 0
     *
     * @var int
     */
    public $qbufFree;

    /**
     * @description The number of subscribed channels.
     *
     * @example 0
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return sessions
     */
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
