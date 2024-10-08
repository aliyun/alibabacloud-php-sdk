<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponseBody;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponseBody\records\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponseBody\records\data;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var authConf
     */
    public $authConf;

    /**
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @example this is a remark.
     *
     * @var string
     */
    public $comment;

    /**
     * @example 2023-12-24T02:01:11Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example {"value":"1.1.1.1"}
     *
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $hostPolicy;

    /**
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @example a.example.com.cnamezone.com
     *
     * @var string
     */
    public $recordCname;

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
     * @example OSS
     *
     * @var string
     */
    public $recordSourceType;

    /**
     * @example A/AAAA
     *
     * @var string
     */
    public $recordType;

    /**
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @example example.com
     *
     * @var string
     */
    public $siteName;

    /**
     * @example 30
     *
     * @var int
     */
    public $ttl;

    /**
     * @example 2023-06-07T10:02:59Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'authConf'         => 'AuthConf',
        'bizName'          => 'BizName',
        'comment'          => 'Comment',
        'createTime'       => 'CreateTime',
        'data'             => 'Data',
        'hostPolicy'       => 'HostPolicy',
        'proxied'          => 'Proxied',
        'recordCname'      => 'RecordCname',
        'recordId'         => 'RecordId',
        'recordName'       => 'RecordName',
        'recordSourceType' => 'RecordSourceType',
        'recordType'       => 'RecordType',
        'siteId'           => 'SiteId',
        'siteName'         => 'SiteName',
        'ttl'              => 'Ttl',
        'updateTime'       => 'UpdateTime',
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
     * @return records
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
