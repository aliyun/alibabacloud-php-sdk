<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateOrUpdateEventBridgeIntegrationRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $accessSecret;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $eventBusName;

    /**
     * @var string
     */
    public $eventBusRegionId;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
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
