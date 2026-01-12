<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\UpdateHttpApiRouteRequest\policyConfigs\aiCacheConfig;

use AlibabaCloud\Dara\Model;

class vectorConfig extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $collectionId;

    /**
     * @var string
     */
    public $serviceHost;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'apiKey' => 'apiKey',
        'collectionId' => 'collectionId',
        'serviceHost' => 'serviceHost',
        'threshold' => 'threshold',
        'timeout' => 'timeout',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->collectionId) {
            $res['collectionId'] = $this->collectionId;
        }

        if (null !== $this->serviceHost) {
            $res['serviceHost'] = $this->serviceHost;
        }

        if (null !== $this->threshold) {
            $res['threshold'] = $this->threshold;
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['collectionId'])) {
            $model->collectionId = $map['collectionId'];
        }

        if (isset($map['serviceHost'])) {
            $model->serviceHost = $map['serviceHost'];
        }

        if (isset($map['threshold'])) {
            $model->threshold = $map['threshold'];
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
