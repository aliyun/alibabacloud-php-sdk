<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponseBody\records\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\ListRecordsResponseBody\records\data;

class records extends Model
{
    /**
     * @var authConf
     */
    public $authConf;
    /**
     * @var string
     */
    public $bizName;
    /**
     * @var string
     */
    public $comment;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var data
     */
    public $data;
    /**
     * @var string
     */
    public $hostPolicy;
    /**
     * @var bool
     */
    public $proxied;
    /**
     * @var string
     */
    public $recordCname;
    /**
     * @var int
     */
    public $recordId;
    /**
     * @var string
     */
    public $recordName;
    /**
     * @var string
     */
    public $recordSourceType;
    /**
     * @var string
     */
    public $recordType;
    /**
     * @var int
     */
    public $siteId;
    /**
     * @var string
     */
    public $siteName;
    /**
     * @var int
     */
    public $ttl;
    /**
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
        if (null !== $this->authConf) {
            $this->authConf->validate();
        }
        if (null !== $this->data) {
            $this->data->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authConf) {
            $res['AuthConf'] = null !== $this->authConf ? $this->authConf->toArray($noStream) : $this->authConf;
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
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
