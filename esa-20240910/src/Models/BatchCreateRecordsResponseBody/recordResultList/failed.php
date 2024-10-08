<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\failed\data;
use AlibabaCloud\Tea\Model;

class failed extends Model
{
    /**
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @example {"value":"2.2.2.2"}
     *
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @example 1234567890123
     *
     * @var int
     */
    public $recordId;

    /**
     * @example a.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @example A/AAAA
     *
     * @var string
     */
    public $recordType;

    /**
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 60
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'bizName'     => 'BizName',
        'data'        => 'Data',
        'description' => 'Description',
        'proxied'     => 'Proxied',
        'recordId'    => 'RecordId',
        'recordName'  => 'RecordName',
        'recordType'  => 'RecordType',
        'sourceType'  => 'SourceType',
        'ttl'         => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->proxied) {
            $res['Proxied'] = $this->proxied;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failed
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Proxied'])) {
            $model->proxied = $map['Proxied'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
