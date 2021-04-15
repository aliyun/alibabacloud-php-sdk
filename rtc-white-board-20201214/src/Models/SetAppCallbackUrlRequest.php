<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppCallbackUrlRequest extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 白板应用回调地址URL
     *
     * @var string
     */
    public $appCallbackUrl;

    /**
     * @description 白板应用回调鉴权码，由8~20位大小写字母、数字或下划线组成
     *
     * @var string
     */
    public $appCallbackAuthKey;
    protected $_name = [
        'appID'              => 'AppID',
        'appCallbackUrl'     => 'AppCallbackUrl',
        'appCallbackAuthKey' => 'AppCallbackAuthKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appID) {
            $res['AppID'] = $this->appID;
        }
        if (null !== $this->appCallbackUrl) {
            $res['AppCallbackUrl'] = $this->appCallbackUrl;
        }
        if (null !== $this->appCallbackAuthKey) {
            $res['AppCallbackAuthKey'] = $this->appCallbackAuthKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppCallbackUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['AppCallbackUrl'])) {
            $model->appCallbackUrl = $map['AppCallbackUrl'];
        }
        if (isset($map['AppCallbackAuthKey'])) {
            $model->appCallbackAuthKey = $map['AppCallbackAuthKey'];
        }

        return $model;
    }
}
