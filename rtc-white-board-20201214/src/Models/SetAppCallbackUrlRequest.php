<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppCallbackUrlRequest extends Model
{
    /**
     * @var string
     */
    public $appID;

    /**
     * @var string
     */
    public $appCallbackUrl;

    /**
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
