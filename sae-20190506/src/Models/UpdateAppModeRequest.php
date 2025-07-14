<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class UpdateAppModeRequest extends Model
{
    /**
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableIdle;
    protected $_name = [
        'appId' => 'AppId',
        'enableIdle' => 'EnableIdle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->enableIdle) {
            $res['EnableIdle'] = $this->enableIdle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppModeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['EnableIdle'])) {
            $model->enableIdle = $map['EnableIdle'];
        }

        return $model;
    }
}
