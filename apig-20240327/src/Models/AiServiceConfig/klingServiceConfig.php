<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\AiServiceConfig;

use AlibabaCloud\Dara\Model;

class klingServiceConfig extends Model
{
    /**
     * @var string
     */
    public $klingAccessKey;

    /**
     * @var string
     */
    public $klingSecretKey;

    /**
     * @var int
     */
    public $klingTokenRefreshAhead;
    protected $_name = [
        'klingAccessKey' => 'klingAccessKey',
        'klingSecretKey' => 'klingSecretKey',
        'klingTokenRefreshAhead' => 'klingTokenRefreshAhead',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->klingAccessKey) {
            $res['klingAccessKey'] = $this->klingAccessKey;
        }

        if (null !== $this->klingSecretKey) {
            $res['klingSecretKey'] = $this->klingSecretKey;
        }

        if (null !== $this->klingTokenRefreshAhead) {
            $res['klingTokenRefreshAhead'] = $this->klingTokenRefreshAhead;
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
        if (isset($map['klingAccessKey'])) {
            $model->klingAccessKey = $map['klingAccessKey'];
        }

        if (isset($map['klingSecretKey'])) {
            $model->klingSecretKey = $map['klingSecretKey'];
        }

        if (isset($map['klingTokenRefreshAhead'])) {
            $model->klingTokenRefreshAhead = $map['klingTokenRefreshAhead'];
        }

        return $model;
    }
}
