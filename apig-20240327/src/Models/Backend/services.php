<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\Backend;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\HttpDubboTranscoder;

class services extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var HttpDubboTranscoder
     */
    public $httpDubboTranscoder;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $version;

    /**
     * @var int
     */
    public $weight;
    protected $_name = [
        'groupName' => 'groupName',
        'httpDubboTranscoder' => 'httpDubboTranscoder',
        'modelName' => 'modelName',
        'name' => 'name',
        'namespace' => 'namespace',
        'port' => 'port',
        'protocol' => 'protocol',
        'serviceId' => 'serviceId',
        'sourceType' => 'sourceType',
        'version' => 'version',
        'weight' => 'weight',
    ];

    public function validate()
    {
        if (null !== $this->httpDubboTranscoder) {
            $this->httpDubboTranscoder->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['groupName'] = $this->groupName;
        }

        if (null !== $this->httpDubboTranscoder) {
            $res['httpDubboTranscoder'] = null !== $this->httpDubboTranscoder ? $this->httpDubboTranscoder->toArray($noStream) : $this->httpDubboTranscoder;
        }

        if (null !== $this->modelName) {
            $res['modelName'] = $this->modelName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->namespace) {
            $res['namespace'] = $this->namespace;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->protocol) {
            $res['protocol'] = $this->protocol;
        }

        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->weight) {
            $res['weight'] = $this->weight;
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
        if (isset($map['groupName'])) {
            $model->groupName = $map['groupName'];
        }

        if (isset($map['httpDubboTranscoder'])) {
            $model->httpDubboTranscoder = HttpDubboTranscoder::fromMap($map['httpDubboTranscoder']);
        }

        if (isset($map['modelName'])) {
            $model->modelName = $map['modelName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['namespace'])) {
            $model->namespace = $map['namespace'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['protocol'])) {
            $model->protocol = $map['protocol'];
        }

        if (isset($map['serviceId'])) {
            $model->serviceId = $map['serviceId'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['weight'])) {
            $model->weight = $map['weight'];
        }

        return $model;
    }
}
