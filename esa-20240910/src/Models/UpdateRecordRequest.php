<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordRequest\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordRequest\data;
use AlibabaCloud\Tea\Model;

class UpdateRecordRequest extends Model
{
    /**
     * @description The origin authentication information of the CNAME record.
     *
     * @var authConf
     */
    public $authConf;

    /**
     * @description The business scenario of the record for acceleration. Leave the parameter empty if your record is not proxied. Valid values:
     *
     *   **video_image**: video and image.
     *   **api**: API.
     *   **web**: web page.
     *
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The comments of the record.
     *
     * @example This is a remark.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The DNS record information. The format of this field varies based on the record type. For more information, see [Add DNS records](https://www.alibabacloud.com/help/doc-detail/2708761.html).
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
     * @description The origin host policy. This policy takes effect when the record type is CNAME. You can set the policy in two modes:
     *
     *   **follow_hostname**: match the requested domain name.
     *   **follow_origin_domain**: match the origin\\"s domain name.
     *
     * @example follow_origin_domain
     *
     * @var string
     */
    public $hostPolicy;

    /**
     * @description Specifies whether to proxy the record. Only CNAME and A/AAAA records can be proxied. Valid values:
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
     * @description The record ID, which can be obtained by calling [ListRecords](https://help.aliyun.com/document_detail/2850265.html).
     *
     * This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $recordId;

    /**
     * @description The type of the origin for the CNAME record. This parameter is required when you add a CNAME record. Valid values:
     *
     *   **OSS** : OSS origin.
     *   **S3** : S3 origin.
     *   **LB**: Load Balancer origin.
     *   **OP**: origin in an origin pool.
     *   **Domain**: common domain name.
     *
     * If you leave the parameter empty or set its value as null, the default is Domain, which is common domain name.
     *
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The TTL of the record. Unit: seconds. The range is 30 to 86,400, or 1. If the value is 1, the TTL of the record is determined by the system.
     *
     * @example 30
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'authConf' => 'AuthConf',
        'bizName' => 'BizName',
        'comment' => 'Comment',
        'data' => 'Data',
        'hostPolicy' => 'HostPolicy',
        'proxied' => 'Proxied',
        'recordId' => 'RecordId',
        'sourceType' => 'SourceType',
        'ttl' => 'Ttl',
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
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->hostPolicy) {
            $res['HostPolicy'] = $this->hostPolicy;
        }
        if (null !== $this->proxied) {
            $res['Proxied'] = $this->proxied;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
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
     * @return UpdateRecordRequest
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['HostPolicy'])) {
            $model->hostPolicy = $map['HostPolicy'];
        }
        if (isset($map['Proxied'])) {
            $model->proxied = $map['Proxied'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
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
