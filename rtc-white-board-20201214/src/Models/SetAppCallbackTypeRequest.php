<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtcwhiteboard\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SetAppCallbackTypeRequest extends Model
{
    /**
     * @description 白板应用唯一标识符
     *
     * @var string
     */
    public $appID;

    /**
     * @description 白板应用回调类型
     *
     * @var string
     */
    public $appCallbackType;
    protected $_name = [
        'appID'           => 'AppID',
        'appCallbackType' => 'AppCallbackType',
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
        if (null !== $this->appCallbackType) {
            $res['AppCallbackType'] = $this->appCallbackType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetAppCallbackTypeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppID'])) {
            $model->appID = $map['AppID'];
        }
        if (isset($map['AppCallbackType'])) {
            $model->appCallbackType = $map['AppCallbackType'];
        }

        return $model;
    }
}
