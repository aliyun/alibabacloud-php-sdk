<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\beHttpEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\body;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\database;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\feHttpEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\networkType;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\password;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\queryEndpoint;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\securityGroupId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\table;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\userName;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\vpcId;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\sink\sinkDorisParameters\vSwitchIds;
use AlibabaCloud\Tea\Model;

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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->beHttpEndpoint) {
            $res['BeHttpEndpoint'] = null !== $this->beHttpEndpoint ? $this->beHttpEndpoint->toMap() : null;
        }
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->database) {
            $res['Database'] = null !== $this->database ? $this->database->toMap() : null;
        }
        if (null !== $this->feHttpEndpoint) {
            $res['FeHttpEndpoint'] = null !== $this->feHttpEndpoint ? $this->feHttpEndpoint->toMap() : null;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = null !== $this->networkType ? $this->networkType->toMap() : null;
        }
        if (null !== $this->password) {
            $res['Password'] = null !== $this->password ? $this->password->toMap() : null;
        }
        if (null !== $this->queryEndpoint) {
            $res['QueryEndpoint'] = null !== $this->queryEndpoint ? $this->queryEndpoint->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = null !== $this->securityGroupId ? $this->securityGroupId->toMap() : null;
        }
        if (null !== $this->table) {
            $res['Table'] = null !== $this->table ? $this->table->toMap() : null;
        }
        if (null !== $this->userName) {
            $res['UserName'] = null !== $this->userName ? $this->userName->toMap() : null;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = null !== $this->vSwitchIds ? $this->vSwitchIds->toMap() : null;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = null !== $this->vpcId ? $this->vpcId->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sinkDorisParameters
     */
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
