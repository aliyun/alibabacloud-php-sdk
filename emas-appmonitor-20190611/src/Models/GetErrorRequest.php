<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models;

use AlibabaCloud\Dara\Model;

class GetErrorRequest extends Model
{
    /**
     * @var int
     */
    public $appKey;

    /**
     * @var string
     */
    public $bizModule;

    /**
     * @var int
     */
    public $clientTime;

    /**
     * @var string
     */
    public $did;

    /**
     * @var string
     */
    public $digestHash;

    /**
     * @var bool
     */
    public $force;

    /**
     * @var string
     */
    public $os;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'appKey' => 'AppKey',
        'bizModule' => 'BizModule',
        'clientTime' => 'ClientTime',
        'did' => 'Did',
        'digestHash' => 'DigestHash',
        'force' => 'Force',
        'os' => 'Os',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }

        if (null !== $this->bizModule) {
            $res['BizModule'] = $this->bizModule;
        }

        if (null !== $this->clientTime) {
            $res['ClientTime'] = $this->clientTime;
        }

        if (null !== $this->did) {
            $res['Did'] = $this->did;
        }

        if (null !== $this->digestHash) {
            $res['DigestHash'] = $this->digestHash;
        }

        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }

        if (null !== $this->os) {
            $res['Os'] = $this->os;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }

        if (isset($map['BizModule'])) {
            $model->bizModule = $map['BizModule'];
        }

        if (isset($map['ClientTime'])) {
            $model->clientTime = $map['ClientTime'];
        }

        if (isset($map['Did'])) {
            $model->did = $map['Did'];
        }

        if (isset($map['DigestHash'])) {
            $model->digestHash = $map['DigestHash'];
        }

        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }

        if (isset($map['Os'])) {
            $model->os = $map['Os'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
