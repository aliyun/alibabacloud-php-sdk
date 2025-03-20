<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest;

use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList\data;
use AlibabaCloud\Tea\Model;

class recordList extends Model
{
    /**
     * @var authConf
     */
    public $authConf;

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
     * @description The DNS information of the record. Enter fields based on the record type.
     *
     * This parameter is required.
     *
     * @example {
     * "value":"2.2.2.2"
     * }
     *
     * @var data
     */
    public $data;

    /**
     * @description Specifies whether to proxy the record. Only CNAME and A/AAAA records can be proxied. Valid values:
     *
     *   **true**
     *   **false**
     *
     * This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @description The record name.
     *
     * This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description The origin type for the CNAME record. This parameter is required when you add a CNAME record. Valid values:
     *
     *   **OSS**: OSS bucket.
     *   **S3**: S3 bucket.
     *   **LB**: load balancer.
     *   **OP**: origin pool.
     *   **Domain**: domain name.
     *
     * If you do not pass this parameter or if you leave its value empty, Domain is used by default.
     *
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The TTL of the record. Unit: seconds. If the value is 1, the TTL of the record is determined by the system.
     *
     * This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The DNS type of the record.
     *
     * This parameter is required.
     *
     * @example A/AAAA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authConf' => 'AuthConf',
        'bizName' => 'BizName',
        'data' => 'Data',
        'proxied' => 'Proxied',
        'recordName' => 'RecordName',
        'sourceType' => 'SourceType',
        'ttl' => 'Ttl',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConf) {
            $res['AuthConf'] = null !== $this->authConf ? $this->authConf->toMap() : null;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->proxied) {
            $res['Proxied'] = $this->proxied;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthConf'])) {
            $model->authConf = authConf::fromMap($map['AuthConf']);
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Proxied'])) {
            $model->proxied = $map['Proxied'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
