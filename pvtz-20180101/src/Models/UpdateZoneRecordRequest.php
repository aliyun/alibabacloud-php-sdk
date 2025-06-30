<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;

class UpdateZoneRecordRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $line;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var int
     */
    public $recordId;

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
    protected $_name = [
        'clientToken' => 'ClientToken',
        'lang' => 'Lang',
        'line' => 'Line',
        'priority' => 'Priority',
        'recordId' => 'RecordId',
        'rr' => 'Rr',
        'ttl' => 'Ttl',
        'type' => 'Type',
        'userClientIp' => 'UserClientIp',
        'value' => 'Value',
        'weight' => 'Weight',
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

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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

        return $model;
    }
}
