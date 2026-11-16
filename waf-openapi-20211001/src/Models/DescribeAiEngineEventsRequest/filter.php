<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeAiEngineEventsRequest;

use AlibabaCloud\Dara\Model;

class filter extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var int
     */
    public $eventNodeCount;

    /**
     * @var string
     */
    public $handleStatus;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $sourceAccount;

    /**
     * @var string
     */
    public $sourceFingerprint;

    /**
     * @var string
     */
    public $sourceIp;
    protected $_name = [
        'domain' => 'domain',
        'eventId' => 'eventId',
        'eventNodeCount' => 'eventNodeCount',
        'handleStatus' => 'handleStatus',
        'resource' => 'resource',
        'riskLevel' => 'riskLevel',
        'sourceAccount' => 'sourceAccount',
        'sourceFingerprint' => 'sourceFingerprint',
        'sourceIp' => 'sourceIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->eventNodeCount) {
            $res['eventNodeCount'] = $this->eventNodeCount;
        }

        if (null !== $this->handleStatus) {
            $res['handleStatus'] = $this->handleStatus;
        }

        if (null !== $this->resource) {
            $res['resource'] = $this->resource;
        }

        if (null !== $this->riskLevel) {
            $res['riskLevel'] = $this->riskLevel;
        }

        if (null !== $this->sourceAccount) {
            $res['sourceAccount'] = $this->sourceAccount;
        }

        if (null !== $this->sourceFingerprint) {
            $res['sourceFingerprint'] = $this->sourceFingerprint;
        }

        if (null !== $this->sourceIp) {
            $res['sourceIp'] = $this->sourceIp;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['eventNodeCount'])) {
            $model->eventNodeCount = $map['eventNodeCount'];
        }

        if (isset($map['handleStatus'])) {
            $model->handleStatus = $map['handleStatus'];
        }

        if (isset($map['resource'])) {
            $model->resource = $map['resource'];
        }

        if (isset($map['riskLevel'])) {
            $model->riskLevel = $map['riskLevel'];
        }

        if (isset($map['sourceAccount'])) {
            $model->sourceAccount = $map['sourceAccount'];
        }

        if (isset($map['sourceFingerprint'])) {
            $model->sourceFingerprint = $map['sourceFingerprint'];
        }

        if (isset($map['sourceIp'])) {
            $model->sourceIp = $map['sourceIp'];
        }

        return $model;
    }
}
