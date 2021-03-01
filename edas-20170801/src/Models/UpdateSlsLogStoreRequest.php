<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateSlsLogStoreRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $configs;
    protected $_name = [
        'appId'   => 'AppId',
        'configs' => 'Configs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->configs) {
            $res['Configs'] = $this->configs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateSlsLogStoreRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Configs'])) {
            $model->configs = $map['Configs'];
        }

        return $model;
    }
}
