<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList\authConf;
use AlibabaCloud\SDK\ESA\V20240910\Models\BatchCreateRecordsRequest\recordList\data;

class recordList extends Model
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
     * @var data
     */
    public $data;

    /**
     * @var bool
     */
    public $proxied;

    /**
     * @var string
     */
    public $recordName;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var int
     */
    public $ttl;

    /**
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

        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toArray($noStream) : $this->data;
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
