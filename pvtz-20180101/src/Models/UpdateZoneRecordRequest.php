<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class UpdateZoneRecordRequest extends Model
{
    /**
     * @var string
     */
    public $rr;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $userClientIp;
    protected $_name = [
        'rr'           => 'Rr',
        'lang'         => 'Lang',
        'recordId'     => 'RecordId',
        'type'         => 'Type',
        'ttl'          => 'Ttl',
        'priority'     => 'Priority',
        'value'        => 'Value',
        'userClientIp' => 'UserClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rr) {
            $res['Rr'] = $this->rr;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateZoneRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rr'])) {
            $model->rr = $map['Rr'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }

        return $model;
    }
}
