<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordRequest\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\UpdateRecordRequest\data;
use AlibabaCloud\Tea\Model;

class UpdateRecordRequest extends Model
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
     * @description This parameter is required.
     *
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
     * @var bool
     */
    public $proxied;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $recordId;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $ttl;
    protected $_name = [
        'authConf'   => 'AuthConf',
        'bizName'    => 'BizName',
        'comment'    => 'Comment',
        'data'       => 'Data',
        'hostPolicy' => 'HostPolicy',
        'proxied'    => 'Proxied',
        'recordId'   => 'RecordId',
        'sourceType' => 'SourceType',
        'ttl'        => 'Ttl',
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
