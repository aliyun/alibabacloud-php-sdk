<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\CreateAtiAgentRegisterInfoAcmeChallengeRecordResponseBody\records;

use AlibabaCloud\Dara\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $domainScope;

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
    public $recordValue;
    protected $_name = [
        'domainScope' => 'DomainScope',
        'recordName' => 'RecordName',
        'recordType' => 'RecordType',
        'recordValue' => 'RecordValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainScope) {
            $res['DomainScope'] = $this->domainScope;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }

        if (null !== $this->recordValue) {
            $res['RecordValue'] = $this->recordValue;
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
        if (isset($map['DomainScope'])) {
            $model->domainScope = $map['DomainScope'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }

        if (isset($map['RecordValue'])) {
            $model->recordValue = $map['RecordValue'];
        }

        return $model;
    }
}
