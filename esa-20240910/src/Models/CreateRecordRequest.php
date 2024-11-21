<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest\data;
use AlibabaCloud\Tea\Model;

class CreateRecordRequest extends Model
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
     *   **image_video**: video and image.
     *   **api**: API.
     *   **web**: web page.
     *
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The comment of the record. The maximum length is 100 characters.
     *
     * @example This is a remark.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The DNS record information. The format of this field varies based on the record type. For more information, see [References](https://www.alibabacloud.com/help/doc-detail/2708761.html) .
     *
     * This parameter is required.
     * @example {
     * }
     * @var data
     */
    public $data;

    /**
     * @description The origin host policy. This policy takes effect when the record type is CNAME. You can set the policy in two modes:
     *
     *   **follow_hostname**: Follow the host record.
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
     * @description The record name.
     *
     * This parameter is required.
     * @example www.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description The website ID, which can be obtained by calling the [ListSites](https://help.aliyun.com/document_detail/2850189.html) operation.
     *
     * This parameter is required.
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

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
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The TTL of the record. Unit: seconds. If the value is 1, the TTL of the record is determined by the system.
     *
     * @example 30
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The type of the DNS record. For example, A/AAAA, TXT, MX, or CNAME.
     *
     * This parameter is required.
     * @example A/AAAA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authConf'   => 'AuthConf',
        'bizName'    => 'BizName',
        'comment'    => 'Comment',
        'data'       => 'Data',
        'hostPolicy' => 'HostPolicy',
        'proxied'    => 'Proxied',
        'recordName' => 'RecordName',
        'siteId'     => 'SiteId',
        'sourceType' => 'SourceType',
        'ttl'        => 'Ttl',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
     * @return CreateRecordRequest
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
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
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
