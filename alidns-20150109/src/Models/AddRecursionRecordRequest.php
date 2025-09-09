<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class AddRecursionRecordRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $requestSource;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $weight;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'priority' => 'Priority',
        'requestSource' => 'RequestSource',
        'rr' => 'Rr',
        'ttl' => 'Ttl',
        'type' => 'Type',
        'userClientIp' => 'UserClientIp',
        'value' => 'Value',
        'weight' => 'Weight',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
        }

        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        if (null !== $this->weight) {
            $res['Weight'] = $this->weight;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RequestSource'])) {
            $model->requestSource = $map['RequestSource'];
        }

        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }

        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        if (isset($map['Weight'])) {
            $model->weight = $map['Weight'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
