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
     * @example web
     *
     * @var string
     */
    public $bizName;

    /**
     * @description This parameter is required.
     *
     * @example {
     * }
     * @var data
     */
    public $data;

    /**
     * @description This parameter is required.
     *
     * @example true
     *
     * @var bool
     */
    public $proxied;

    /**
     * @description This parameter is required.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $recordName;

    /**
     * @example OSS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description This parameter is required.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description This parameter is required.
     *
     * @example A/AAAA
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'authConf'   => 'AuthConf',
        'bizName'    => 'BizName',
        'data'       => 'Data',
        'proxied'    => 'Proxied',
        'recordName' => 'RecordName',
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
