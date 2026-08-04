<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class SetCacheOperateSyncRequest extends Model
{
    /**
     * @var int
     */
    public $exceptVersion;

    /**
     * @var int
     */
    public $expireSeconds;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $setType;

    /**
     * @var string
     */
    public $valueClazz;

    /**
     * @var string
     */
    public $valueString;
    protected $_name = [
        'exceptVersion' => 'ExceptVersion',
        'expireSeconds' => 'ExpireSeconds',
        'key' => 'Key',
        'setType' => 'SetType',
        'valueClazz' => 'ValueClazz',
        'valueString' => 'ValueString',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptVersion) {
            $res['ExceptVersion'] = $this->exceptVersion;
        }

        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->setType) {
            $res['SetType'] = $this->setType;
        }

        if (null !== $this->valueClazz) {
            $res['ValueClazz'] = $this->valueClazz;
        }

        if (null !== $this->valueString) {
            $res['ValueString'] = $this->valueString;
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
        if (isset($map['ExceptVersion'])) {
            $model->exceptVersion = $map['ExceptVersion'];
        }

        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['SetType'])) {
            $model->setType = $map['SetType'];
        }

        if (isset($map['ValueClazz'])) {
            $model->valueClazz = $map['ValueClazz'];
        }

        if (isset($map['ValueString'])) {
            $model->valueString = $map['ValueString'];
        }

        return $model;
    }
}
