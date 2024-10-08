<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class UpdateRecordShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $authConfShrink;

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
     * @var string
     */
    public $dataShrink;

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
        'authConfShrink' => 'AuthConf',
        'bizName'        => 'BizName',
        'comment'        => 'Comment',
        'dataShrink'     => 'Data',
        'hostPolicy'     => 'HostPolicy',
        'proxied'        => 'Proxied',
        'recordId'       => 'RecordId',
        'sourceType'     => 'SourceType',
        'ttl'            => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authConfShrink) {
            $res['AuthConf'] = $this->authConfShrink;
        }
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->dataShrink) {
            $res['Data'] = $this->dataShrink;
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
     * @return UpdateRecordShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthConf'])) {
            $model->authConfShrink = $map['AuthConf'];
        }
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Data'])) {
            $model->dataShrink = $map['Data'];
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
