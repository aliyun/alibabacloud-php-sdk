<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsResponseBody\recordResultList\success\data;
use AlibabaCloud\Tea\Model;

class success extends Model
{
    /**
     * @description The business scenario of the record for acceleration. Valid values:
     *
     *   **image_video**
     *   **api**
     *   **web**
     *
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The DNS record information.
     *
     * @example {"value":"1.1.1.1"}
     *
     * @var data
     */
    public $data;

    /**
     * @description The result description.
     *
     * @example success
     *
     * @var string
     */
    public $description;

    /**
     * @description Indicates whether the record is proxied. Only CNAME and A/AAAA records can be proxied. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @description The record ID.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The record name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description The DNS type of the record, such as **A/AAAA, CNAME, and TXT**.
     *
     * @example A/AAAA
     *
     * @var string
     */
    public $recordType;

    /**
     * @description The origin type of the CNAME record. This field is left empty for other types of records. The type of the origin server. Valid values:
     *
     *   **OSS**: OSS bucket.
     *   **S3**: S3 bucket.
     *   **LB**: load balancer.
     *   **OP**: origin pool.
     *   **Domain**: domain name.
     *
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The TTL of the record. Unit: seconds. If the value is 1, the TTL of the record is determined by the system.
     *
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
     * @return success
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
