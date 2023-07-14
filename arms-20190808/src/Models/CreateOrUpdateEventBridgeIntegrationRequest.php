<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateEventBridgeIntegrationRequest extends Model
{
    /**
     * @description The AccessKey ID that is used to connect to EventBridge.
     *
     * @example abc******************
     *
     * @var string
     */
    public $accessKey;

    /**
     * @description The AccessKey secret that is used to connect to EventBridge.
     *
     * @example abc******************
     *
     * @var string
     */
    public $accessSecret;

    /**
     * @description The description of the EventBridge integration.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The public endpoint of EventBridge.
     *
     * @example http://xxxxx
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The name of the event bus.
     *
     * @example EventBus_Test
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The region ID of the event bus.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $eventBusRegionId;

    /**
     * @description The ID of the EventBridge integration.
     *
     *   If you do not specify this parameter, an EventBridge integration is created.
     *   If you specify this parameter, the specified EventBridge integration is modified.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the EventBridge integration.
     *
     * @example EventBridge_Test
     *
     * @var string
     */
    public $name;

    /**
     * @description The event source.
     *
     * @example arms
     *
     * @var string
     */
    public $source;
    protected $_name = [
        'accessKey'        => 'AccessKey',
        'accessSecret'     => 'AccessSecret',
        'description'      => 'Description',
        'endpoint'         => 'Endpoint',
        'eventBusName'     => 'EventBusName',
        'eventBusRegionId' => 'EventBusRegionId',
        'id'               => 'Id',
        'name'             => 'Name',
        'source'           => 'Source',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->accessSecret) {
            $res['AccessSecret'] = $this->accessSecret;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->eventBusRegionId) {
            $res['EventBusRegionId'] = $this->eventBusRegionId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateEventBridgeIntegrationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['AccessSecret'])) {
            $model->accessSecret = $map['AccessSecret'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['EventBusRegionId'])) {
            $model->eventBusRegionId = $map['EventBusRegionId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
