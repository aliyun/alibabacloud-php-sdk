<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppCodeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0d13f021c5cd4997831a9717e75b0663
     *
     * @var string
     */
    public $appCode;

    /**
     * @description This parameter is required.
     *
     * @example 111265074
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'appCode' => 'AppCode',
        'appId'   => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAppCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
