<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\CreateRecordRequest\data;
use AlibabaCloud\Tea\Model;

class CreateRecordRequest extends Model
{
    /**
     * @var authConf
     */
    public $authConf;

    /**
     * @description 业务场景
     *
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @example This is a remark.
     *
     * @var string
     */
    public $comment;

    /**
     * @description This parameter is required.
     *
     * @example {
     * }
     * @var data
     */
    public $data;

    /**
     * @var string
     */
    public $hostPolicy;

    /**
     * @description 是否代理加速
     *
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @description 记录名称
     *
     * This parameter is required.
     * @example www.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @description This parameter is required.
     *
     * @example 1234567890123
     *
     * @var int
     */
    public $siteId;

    /**
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 30
     *
     * @var int
     */
    public $ttl;

    /**
     * @description 记录类型
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
