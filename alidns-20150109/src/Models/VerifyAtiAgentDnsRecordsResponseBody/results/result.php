<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\VerifyAtiAgentDnsRecordsResponseBody\results;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $failReason;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var string
     */
    public $recordType;

    /**
     * @var string
     */
    public $verifyStatus;
    protected $_name = [
        'failReason' => 'FailReason',
        'recordName' => 'RecordName',
        'recordType' => 'RecordType',
        'verifyStatus' => 'VerifyStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
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
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }

        return $model;
    }
}
