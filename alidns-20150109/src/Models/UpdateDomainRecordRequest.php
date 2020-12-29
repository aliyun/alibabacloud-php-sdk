<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateDomainRecordRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $RR;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $value;

    /**
     * @var int
     */
    public $TTL;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $line;
    protected $_name = [
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
        'recordId'     => 'RecordId',
        'RR'           => 'RR',
        'type'         => 'Type',
        'value'        => 'Value',
        'TTL'          => 'TTL',
        'priority'     => 'Priority',
        'line'         => 'Line',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->RR) {
            $res['RR'] = $this->RR;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->TTL) {
            $res['TTL'] = $this->TTL;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->line) {
            $res['Line'] = $this->line;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDomainRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RR'])) {
            $model->RR = $map['RR'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['TTL'])) {
            $model->TTL = $map['TTL'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['Line'])) {
            $model->line = $map['Line'];
        }

        return $model;
    }
}
