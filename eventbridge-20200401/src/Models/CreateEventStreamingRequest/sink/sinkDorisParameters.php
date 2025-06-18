<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\beHttpEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\database;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\feHttpEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\networkType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\password;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\queryEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\table;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\userName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\sink\sinkDorisParameters\vSwitchIds;

class sinkDorisParameters extends Model
{
    /**
     * @var beHttpEndpoint
     */
    public $beHttpEndpoint;

    /**
     * @var body
     */
    public $body;

    /**
     * @var database
     */
    public $database;

    /**
     * @var feHttpEndpoint
     */
    public $feHttpEndpoint;

    /**
     * @var networkType
     */
    public $networkType;

    /**
     * @var password
     */
    public $password;

    /**
     * @var queryEndpoint
     */
    public $queryEndpoint;

    /**
     * @var securityGroupId
     */
    public $securityGroupId;

    /**
     * @var table
     */
    public $table;

    /**
     * @var userName
     */
    public $userName;

    /**
     * @var vSwitchIds
     */
    public $vSwitchIds;

    /**
     * @var vpcId
     */
    public $vpcId;
    protected $_name = [
        'beHttpEndpoint' => 'BeHttpEndpoint',
        'body' => 'Body',
        'database' => 'Database',
        'feHttpEndpoint' => 'FeHttpEndpoint',
        'networkType' => 'NetworkType',
        'password' => 'Password',
        'queryEndpoint' => 'QueryEndpoint',
        'securityGroupId' => 'SecurityGroupId',
        'table' => 'Table',
        'userName' => 'UserName',
        'vSwitchIds' => 'VSwitchIds',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->beHttpEndpoint) {
            $this->beHttpEndpoint->validate();
        }
        if (null !== $this->body) {
            $this->body->validate();
        }
        if (null !== $this->database) {
            $this->database->validate();
        }
        if (null !== $this->feHttpEndpoint) {
            $this->feHttpEndpoint->validate();
        }
        if (null !== $this->networkType) {
            $this->networkType->validate();
        }
        if (null !== $this->password) {
            $this->password->validate();
        }
        if (null !== $this->queryEndpoint) {
            $this->queryEndpoint->validate();
        }
        if (null !== $this->securityGroupId) {
            $this->securityGroupId->validate();
        }
        if (null !== $this->table) {
            $this->table->validate();
        }
        if (null !== $this->userName) {
            $this->userName->validate();
        }
        if (null !== $this->vSwitchIds) {
            $this->vSwitchIds->validate();
        }
        if (null !== $this->vpcId) {
            $this->vpcId->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beHttpEndpoint) {
            $res['BeHttpEndpoint'] = null !== $this->beHttpEndpoint ? $this->beHttpEndpoint->toArray($noStream) : $this->beHttpEndpoint;
        }

        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
        }

        if (null !== $this->database) {
            $res['Database'] = null !== $this->database ? $this->database->toArray($noStream) : $this->database;
        }

        if (null !== $this->feHttpEndpoint) {
            $res['FeHttpEndpoint'] = null !== $this->feHttpEndpoint ? $this->feHttpEndpoint->toArray($noStream) : $this->feHttpEndpoint;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = null !== $this->networkType ? $this->networkType->toArray($noStream) : $this->networkType;
        }

        if (null !== $this->password) {
            $res['Password'] = null !== $this->password ? $this->password->toArray($noStream) : $this->password;
        }

        if (null !== $this->queryEndpoint) {
            $res['QueryEndpoint'] = null !== $this->queryEndpoint ? $this->queryEndpoint->toArray($noStream) : $this->queryEndpoint;
        }

        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toArray($noStream) : $this->securityGroupId;
        }

        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toArray($noStream) : $this->table;
        }

        if (null !== $this->userName) {
            $res['UserName'] = null !== $this->userName ? $this->userName->toArray($noStream) : $this->userName;
        }

        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toArray($noStream) : $this->vSwitchIds;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toArray($noStream) : $this->vpcId;
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
        if (isset($map['BeHttpEndpoint'])) {
            $model->beHttpEndpoint = beHttpEndpoint::fromMap($map['BeHttpEndpoint']);
        }

        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        if (isset($map['Database'])) {
            $model->database = database::fromMap($map['Database']);
        }

        if (isset($map['FeHttpEndpoint'])) {
            $model->feHttpEndpoint = feHttpEndpoint::fromMap($map['FeHttpEndpoint']);
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = networkType::fromMap($map['NetworkType']);
        }

        if (isset($map['Password'])) {
            $model->password = password::fromMap($map['Password']);
        }

        if (isset($map['QueryEndpoint'])) {
            $model->queryEndpoint = queryEndpoint::fromMap($map['QueryEndpoint']);
        }

        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = securityGroupId::fromMap($map['SecurityGroupId']);
        }

        if (isset($map['Table'])) {
            $model->table = table::fromMap($map['Table']);
        }

        if (isset($map['UserName'])) {
            $model->userName = userName::fromMap($map['UserName']);
        }

        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = vSwitchIds::fromMap($map['VSwitchIds']);
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = vpcId::fromMap($map['VpcId']);
        }

        return $model;
    }
}
