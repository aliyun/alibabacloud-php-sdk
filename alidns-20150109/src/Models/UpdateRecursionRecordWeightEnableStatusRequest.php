<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateRecursionRecordWeightEnableStatusRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $requestSource;

    /**
     * @var string
     */
    public $rr;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'enableStatus' => 'EnableStatus',
        'requestSource' => 'RequestSource',
        'rr' => 'Rr',
        'type' => 'Type',
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

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->requestSource) {
            $res['RequestSource'] = $this->requestSource;
        }

        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['RequestSource'])) {
            $model->requestSource = $map['RequestSource'];
        }

        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
