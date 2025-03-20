<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody\recordModel\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\GetRecordResponseBody\recordModel\data;
use AlibabaCloud\Tea\Model;

class recordModel extends Model
{
    /**
     * @description The origin authentication information of the CNAME record.
     *
     * @var authConf
     */
    public $authConf;

    /**
     * @description The business scenario of the record for acceleration. Leave this parameter empty if your record is not proxied. Valid values:
     *
     *   **image_video**
     *   **api**
     *   **web**
     *
     * @example image_video
     *
     * @var string
     */
    public $bizName;

    /**
     * @description The comments of the record.
     *
     * @example This is a comment.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the record was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-03-10T13:30:39Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The DNS record information. The content returned by this parameter varies based on the record type.
     *
     * @example {"value":"1.1.1.1"}
     *
     * @var data
     */
    public $data;

    /**
     * @description The origin host policy. This policy takes effect when the record type is CNAME. Valid values:
     *
     *   follow_hostname: matches the requested domain name.
     *   follow_origin_domain: matches the origin\\"s domain name.
     *
     * @example follow_origin_domain
     *
     * @var string
     */
    public $hostPolicy;

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
     * @description The CNAME. If you use CNAME setup when you add your website to ESA, the value is the CNAME that you configured then.
     *
     * @example a.example.com.cnamezone.com
     *
     * @var string
     */
    public $recordCname;

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
     * @example a.example.com
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
     * If you do not pass this parameter or if you leave its value empty, Domain is returned by default.
     *
     * @example OSS
     *
     * @var string
     */
    public $recordSourceType;

    /**
     * @description The type of the DNS record, such as **A/AAAA, CNAME, and TXT**.
     *
     * @example A/AAAA
     *
     * @var string
     */
    public $recordType;

    /**
     * @description The website ID.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @description The website name.
     *
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @description The TTL of the record. Unit: seconds. If the value is 1, the TTL of the record is determined by the system.
     *
     * @example 20
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The time when the record was updated. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2023-01-27T02:26:22Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'authConf' => 'AuthConf',
        'bizName' => 'BizName',
        'comment' => 'Comment',
        'createTime' => 'CreateTime',
        'data' => 'Data',
        'hostPolicy' => 'HostPolicy',
        'proxied' => 'Proxied',
        'recordCname' => 'RecordCname',
        'recordId' => 'RecordId',
        'recordName' => 'RecordName',
        'recordSourceType' => 'RecordSourceType',
        'recordType' => 'RecordType',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
        'ttl' => 'Ttl',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->recordCname) {
            $res['RecordCname'] = $this->recordCname;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }
        if (null !== $this->recordSourceType) {
            $res['RecordSourceType'] = $this->recordSourceType;
        }
        if (null !== $this->recordType) {
            $res['RecordType'] = $this->recordType;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordModel
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['RecordCname'])) {
            $model->recordCname = $map['RecordCname'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }
        if (isset($map['RecordSourceType'])) {
            $model->recordSourceType = $map['RecordSourceType'];
        }
        if (isset($map['RecordType'])) {
            $model->recordType = $map['RecordType'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
