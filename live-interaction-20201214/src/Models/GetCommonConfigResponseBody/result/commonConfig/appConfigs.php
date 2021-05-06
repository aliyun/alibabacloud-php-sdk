<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\GetCommonConfigResponseBody\result\commonConfig;

use AlibabaCloud\Tea\Model;

class appConfigs extends Model
{
    /**
     * @description appKey
     *
     * @var string
     */
    public $appKey;

    /**
     * @description 平台
     *
     * @var string
     */
    public $platform;
    protected $_name = [
        'appKey'   => 'AppKey',
        'platform' => 'Platform',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appKey) {
            $res['AppKey'] = $this->appKey;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppKey'])) {
            $model->appKey = $map['AppKey'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        return $model;
    }
}
